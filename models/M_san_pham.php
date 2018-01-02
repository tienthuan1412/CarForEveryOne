<?php
include_once('models/Database.php');
class M_san_pham extends Database
{
	public function getDSTrongNgay()
	{
		$this->setQuery('select * from xe_hoi where trong_ngay=1');
		return $this->loadAllRow();
	}
	
	public function getDSSanPhamPhanTrang($start,$limit)
	{
		$this->setQuery("select * from xe_hoi limit $start,$limit");
		return $this->loadAllRow();
	}
	public function getDSSanPhamCungLoai($idxe,$idhang_xe)
	{
		$this->setQuery('select * from xe_hoi where idxe!=? and idhang_xe=?');
		return $this->loadAllRow(array($idxe,$idhang_xe));
	}
	public function getSanPham($idxe)
	{
		$this->setQuery('SELECT `idxe`,`ten_xe`,`ten_xe_url`,`noi_dung_tom_tat`,`noi_dung_chi_tiet`,`don_gia`,`gia_khuyen_mai`,`khuyen_mai`,`ngay_cap_nhat`,`xe_hoi`.`hinh`,`xe_hoi`.`status`,`xe_hoi`.`idhang_xe`,`hang_xe_hoi`.`ten_hang`,`dvt`,`video` FROM `xe_hoi`
			INNER JOIN `hang_xe_hoi` ON `xe_hoi`.`idhang_xe`=`hang_xe_hoi`.`idhang_xe` AND `idxe`=?');
		return $this->loadRow(array($idxe));		
	}
	public function getHangXe($idhang_xe)
	{
		$this->setQuery('select * from hang_xe_hoi where idhang_xe=?');
		return $this->loadRow(array($idhang_xe));
	}
	public function getXe($idxe)
	{
		$this->setQuery('select * from xe_hoi where idxe=?');
		return $this->loadRow(array($idxe));
	}
	public function getDSHangXe()
	{
		$this->setQuery('select * from hang_xe_hoi');
		return $this->loadAllRow();
	}

	public function getTimSanPham($value)
	{
		$tam='%'.$value . '%';
		$this->setQuery('select * from xe_hoi where ten_xe_hoi like ?');
		return $this->loadRow(array($tam));
	}
	public function getDSSanPhamTheoLoaiCha($mang)
	{
		$chuoi=implode(',',$mang);
		$this->setQuery("select * from xe_hoi where idxe in ($chuoi)");
		return $this->loadAllRow();
	}

	public function getDSSanPhamGiamGia()
	{
		$this->setQuery('select * from xe_hoi where don_gia_khuyen_mai>0');
		return $this->loadAllRow();
	}
	public function TongSoSanPham(){
		$this->setQuery("SELECT * FROM xe_hoi where status=1");
		return $this->countAll();
	}
	public function DemSoSanPham(){
		$this->setQuery("SELECT * FROM xe_hoi where 1");
		return $this->countAll();
	}

	public function ThemSanPham($data)
	{
		$sql='insert into xe_hoi(`idhang_xe`, `ten_xe`, `ten_xe_url`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `don_gia`, `gia_khuyen_mai`, `khuyen_mai`, `hinh`, `ngay_cap_nhat`, `dvt`,`video`,`status`) values(?,?,?,?,?,?,?,?,?,?,?,?,?)';
		$this->setQuery($sql);
		return $this->execute(array($data['idhang_xe'], $data['ten_xe'], $data['ten_xe_url'], $data['noi_dung_tom_tat'], $data['noi_dung_chi_tiet'], $data['don_gia'], $data['gia_khuyen_mai'], $data['khuyen_mai'], $data['hinh'], $data['ngay_cap_nhat'], $data['dvt'], $data['video'],$data['status']));
	}

	public function ThemHangXe($data)
	{
		$sql='insert into hang_xe_hoi(`ten_hang`,`ten_hang_url`,`mo_ta`,`hinh`,`status`) values(?,?,?,?,?)';
		$this->setQuery($sql);
		return $this->execute(array($data['ten_hang'], $data['ten_hang_url'], $data['mo_ta'], $data['hinh'],$data['status']));
	}

	public function CapNhatHangXe($data)
	{
		$this->setQuery('update hang_xe_hoi set `ten_hang`=?, `ten_hang_url`=?, `mo_ta`=?,`hinh`=?,`status`=? where idhang_xe=?');
		return $this->execute(array($data['ten_hang'], $data['ten_hang_url'], $data['mo_ta'], $data['hinh'],$data['status'],$data['idhang_xe']));
	}

	public function CapNhatSanPham($data)
	{
		$this->setQuery('update xe_hoi set `idhang_xe`=?, `ten_xe`=?, `ten_xe_url`=?, `noi_dung_tom_tat`=?, `noi_dung_chi_tiet`=?, `don_gia`=?, `gia_khuyen_mai`=?, `khuyen_mai`=?, `hinh`=?, `ngay_cap_nhat`=?, `dvt`=?,`video`=?, `status`=? where idxe=?');
		return $this->execute(array($data['idhang_xe'], $data['ten_xe'], $data['ten_xe_url'], $data['noi_dung_tom_tat'], $data['noi_dung_chi_tiet'], $data['don_gia'], $data['gia_khuyen_mai'], $data['khuyen_mai'], $data['hinh'], $data['ngay_cap_nhat'], $data['dvt'], $data['video'],  $data['status'],$data['idxe']));	

	}
	public function XoaSanPham($ma_xe_hoi)
	{
		$this->setQuery('delete from xe_hoi where ma_xe_hoi=?');
		return $this->execute(array($ma_xe_hoi));
	}
	public function getDSXeCuaHang($idhang_xe)
	{
		$this->setQuery('select * from xe_hoi where idhang_xe=?');
		return $this->loadAllRow(array($idhang_xe));
	}
	public function TaoTimKiemSanPham()
	{
		$this->setQuery("select ten_xe, ten_xe_url from xe_hoi");
		return $this->loadAllRow();
	}
	public function TimKiemSanPhamURL($tenurl)
	{
		$ten="'%". $tenurl . "%'";
		$this->setQuery("select * from xe_hoi where ten_xe_url like ?");
		return $this->loadAllRow(array($tenurl));
	}
	public function SanPhamBanChay()
	{
	   	$this->setQuery('SELECT `xe_hoi`.`ma_xe_hoi`, `ten_xe_hoi`,`ten_xe_hoi_url`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `xe_hoi`.`don_gia`, `don_gia_khuyen_mai`, sum(`so_luong`)as TSL
	   					FROM `xe_hoi`
	   					INNER JOIN `chi_tiet_hoa_don` ON `xe_hoi`.`ma_xe_hoi`=`chi_tiet_hoa_don`.`ma_xe_hoi`
	   					GROUP BY `ma_xe_hoi`,`ten_xe_hoi`
                        HAVING sum(`so_luong`)>=2
                        ORDER BY sum(`so_luong`) desc
                        LIMIT 0,10');
	    return $this->loadAllRow();
	    
	}
}
?>
