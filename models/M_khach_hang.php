<?php
include_once('models/Database.php');
class M_khach_hang extends Database
{
	public function ThemKhachHang($data)
	{
		$sql='insert into khach_hang(`ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai`, `ghi_chu`, `ten_dang_nhap`, `mat_khau`) values(?,?,?,?,?,?,?,?)';
		$this->setQuery($sql);
		return $this->execute(array($data['ten_khach_hang'], $data['phai'], $data['email'], $data['dia_chi'], $data['dien_thoai'], $data['ghi_chu'], $data['ten_dang_nhap'],MD5($data['mat_khau'])));
		//return $this->lastInsertId();
	}
	public function KhachHangDangNhap($tendn,$matkhau)
	{
		$this->setQuery('select * from khach_hang where ten_dang_nhap=? and mat_khau=?');
		return $this->loadRow(array($tendn,MD5($matkhau)));
	}
	public function ThemDonDatHang($data)
    {
        $this->setQuery('insert into hoa_don(`idkhach_hang`, `ngay_dat`, `tong_tien`, `tien_dat_coc`, `con_lai`, `hinh_thuc_thanh_toan`, `ghi_chu`,`status`) values(?,?,?,?,?,?,?,?)');
        $this->execute(array($data['idkhach_hang'], $data['ngay_dat'], $data['tong_tien'],$data['tien_dat_coc'], $data['con_lai'], $data['hinh_thuc_thanh_toan'], $data['ghi_chu'],$data['status']));
        return $this->lastInsertId();
    }
    public function ThemChiTietHoaDon($data)
    {
        $this->setQuery('insert into chi_tiet_hoa_don(`idhoa_don`, `idxe`, `so_luong`, `don_gia`, `san_pham_bst`) values(?,?,?,?,?)');
        return $this->execute(array($data['idhoa_don'], $data['idxe'], $data['so_luong'], $data['don_gia'], $data['san_pham_bst']));
    }
    public function DonDatHang($SoHD)
    {
        $chuoiSQL='SELECT `khach_hang`.`idkhach_hang`, `ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai`, `khach_hang`.`ghi_chu`,`hoa_don`.`idhoa_don`, `ngay_dat`, `tong_tien`, `tien_dat_coc`, `con_lai`, `hinh_thuc_thanh_toan`, `chi_tiet_hoa_don`.`idxe`, `chi_tiet_hoa_don`.`so_luong`, `chi_tiet_hoa_don`.`don_gia`, `san_pham_bst` FROM `khach_hang` 
INNER JOIN `hoa_don` ON  `khach_hang`.`idkhach_hang`= `hoa_don`.`idkhach_hang` INNER JOIN `chi_tiet_hoa_don` ON `chi_tiet_hoa_don`.`idhoa_don`= `hoa_don`.`idhoa_don` where `hoa_don`.`idhoa_don`=?';
        $this->setQuery($chuoiSQL);
        $DonDatHang=$this->loadAllRow(array($SoHD));
        if(count($DonDatHang)>0)
        {
           for($i=0;$i<count($DonDatHang);$i++)
           {
                if($DonDatHang[$i]['san_pham_bst']==1)
                    $DonDatHang[$i]['ten']=$this->LayTenBoSuuTap($DonDatHang[$i]['idxe']);
                    
                else
                    $DonDatHang[$i]['ten']=$this->LayTenSanPham($DonDatHang[$i]['idxe']);
           }
           return $DonDatHang;
        }
        else
            return false;
    }
    public function LayTenSanPham($masanpham)
    {
        $this->setQuery('select * from xe_hoi where idxe=?');
        $sanpham=$this->loadRow(array($masanpham));
        if($sanpham)
            return $sanpham['ten_xe'];
        return false;
    }
    public function LayTenBoSuuTap($mabosuutap)
    {
        $this->setQuery('select * from bst where ma_bst=?');
        $bst=$this->loadRow(array($mabosuutap));
        if($bst)
            return $bst['ten_bst'];
        return false;
    }
    public function TaoTimKiemKhachHang()
    {
        $this->setQuery("select ten_khach_hang, idkhach_hang from khach_hang");
        return $this->loadAllRow();
    }
    public function TimKiemTenKhachHang($idkhach_hang)
    {
        $ten="'%". $idkhach_hang . "%'";
        $this->setQuery("SELECT `khach_hang`.`idkhach_hang`, `ten_khach_hang`, `email`, `dia_chi`, `dien_thoai`, `khach_hang`.`ghi_chu`,`idhoa_don`, `ngay_dat` 
            from khach_hang 
            INNER JOIN `hoa_don` ON `hoa_don`.`idkhach_hang`=`khach_hang`.`idkhach_hang`
            where `khach_hang`.`idkhach_hang` like ?");
        return $this->loadAllRow(array($idkhach_hang));
    }
}