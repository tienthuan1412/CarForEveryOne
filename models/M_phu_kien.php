<?php
include_once('models/Database.php');
class M_phu_kien extends Database
{
	public function getDSTrongNgay()
	{
		$this->setQuery('select * from phu_kien where trong_ngay=1');
		return $this->loadAllRow();
	}
	
	public function getDSPhuKienPhanTrang($start,$limit)
	{
		$this->setQuery("select * from phu_kien limit $start,$limit");
		return $this->loadAllRow();
	}
	public function getDSPhuKienCungLoai($idphu_kien,$idhang_xe)
	{
		$this->setQuery('select * from phu_kien where idphu_kien!=? and idhang_xe=?');
		return $this->loadAllRow(array($idphu_kien,$idhang_xe));
	}
	public function getPhuKien($idphu_kien)
	{
		$this->setQuery('SELECT `idphu_kien`,`ten_xe`,`ten_xe_url`,`noi_dung_tom_tat`,`noi_dung_chi_tiet`,`don_gia`,`gia_khuyen_mai`,`khuyen_mai`,`ngay_cap_nhat`,`phu_kien`.`hinh`,`phu_kien`.`status`,`phu_kien`.`idhang_xe`,`hang_phu_kien`.`ten_hang`,`dvt`,`video` FROM `phu_kien`
			INNER JOIN `hang_phu_kien` ON `phu_kien`.`idhang_xe`=`hang_phu_kien`.`idhang_xe` AND `idphu_kien`=?');
		return $this->loadRow(array($idphu_kien));		
	}
	public function getHangXe($idhang_xe)
	{
		$this->setQuery('select * from hang_phu_kien where idhang_xe=?');
		return $this->loadRow(array($idhang_xe));
	}
	public function getXe($idphu_kien)
	{
		$this->setQuery('select * from phu_kien where idphu_kien=?');
		return $this->loadRow(array($idphu_kien));
	}
	public function getDSHangXe()
	{
		$this->setQuery('select * from hang_phu_kien');
		return $this->loadAllRow();
	}

	public function getTimPhuKien($value)
	{
		$tam='%'.$value . '%';
		$this->setQuery('select * from phu_kien where ten_phu_kien like ?');
		return $this->loadRow(array($tam));
	}
	public function getDSPhuKienTheoLoaiCha($mang)
	{
		$chuoi=implode(',',$mang);
		$this->setQuery("select * from phu_kien where idphu_kien in ($chuoi)");
		return $this->loadAllRow();
	}

	public function getDSPhuKienGiamGia()
	{
		$this->setQuery('select * from phu_kien where don_gia_khuyen_mai>0');
		return $this->loadAllRow();
	}
	public function TongSoPhuKien(){
		$this->setQuery("SELECT * FROM phu_kien where status=1");
		return $this->countAll();
	}
	public function ThemPhuKien($data)
	{
		$sql='insert into phu_kien(`idhang_xe`, `ten_xe`, `ten_xe_url`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `don_gia`, `gia_khuyen_mai`, `khuyen_mai`, `hinh`, `ngay_cap_nhat`, `dvt`,`video`,`status`) values(?,?,?,?,?,?,?,?,?,?,?,?,?)';
		$this->setQuery($sql);
		return $this->execute(array($data['idhang_xe'], $data['ten_xe'], $data['ten_xe_url'], $data['noi_dung_tom_tat'], $data['noi_dung_chi_tiet'], $data['don_gia'], $data['gia_khuyen_mai'], $data['khuyen_mai'], $data['hinh'], $data['ngay_cap_nhat'], $data['dvt'], $data['video'],$data['status']));
	}

	public function ThemHangXe($data)
	{
		$sql='insert into hang_phu_kien(`ten_hang`,`ten_hang_url`,`mo_ta`,`hinh`,`status`) values(?,?,?,?,?)';
		$this->setQuery($sql);
		return $this->execute(array($data['ten_hang'], $data['ten_hang_url'], $data['mo_ta'], $data['hinh'],$data['status']));
	}

	public function CapNhatHangXe($data)
	{
		$this->setQuery('update hang_phu_kien set `ten_hang`=?, `ten_hang_url`=?, `mo_ta`=?,`hinh`=?,`status`=? where idhang_xe=?');
		return $this->execute(array($data['ten_hang'], $data['ten_hang_url'], $data['mo_ta'], $data['hinh'],$data['status'],$data['idhang_xe']));
	}

	public function CapNhatPhuKien($data)
	{
		$this->setQuery('update phu_kien set `idhang_xe`=?, `ten_xe`=?, `ten_xe_url`=?, `noi_dung_tom_tat`=?, `noi_dung_chi_tiet`=?, `don_gia`=?, `gia_khuyen_mai`=?, `khuyen_mai`=?, `hinh`=?, `ngay_cap_nhat`=?, `dvt`=?,`video`=?, `status`=? where idphu_kien=?');
		return $this->execute(array($data['idhang_xe'], $data['ten_xe'], $data['ten_xe_url'], $data['noi_dung_tom_tat'], $data['noi_dung_chi_tiet'], $data['don_gia'], $data['gia_khuyen_mai'], $data['khuyen_mai'], $data['hinh'], $data['ngay_cap_nhat'], $data['dvt'], $data['video'],  $data['status'],$data['idphu_kien']));	

	}
	public function XoaPhuKien($ma_phu_kien)
	{
		$this->setQuery('delete from phu_kien where ma_phu_kien=?');
		return $this->execute(array($ma_phu_kien));
	}
	public function getDSXeCuaHang($idhang_xe)
	{
		$this->setQuery('select * from phu_kien where idhang_xe=?');
		return $this->loadAllRow(array($idhang_xe));
	}
	public function TaoTimKiemPhuKien()
	{
		$this->setQuery("select ten_xe, ten_xe_url from phu_kien");
		return $this->loadAllRow();
	}
	public function TimKiemPhuKienURL($tenurl)
	{
		$ten="'%". $tenurl . "%'";
		$this->setQuery("select * from phu_kien where ten_xe_url like ?");
		return $this->loadAllRow(array($tenurl));
	}
	public function PhuKienBanChay()
	{
	   	$this->setQuery('SELECT `phu_kien`.`ma_phu_kien`, `ten_phu_kien`,`ten_phu_kien_url`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `phu_kien`.`don_gia`, `don_gia_khuyen_mai`, sum(`so_luong`)as TSL
	   					FROM `phu_kien`
	   					INNER JOIN `chi_tiet_hoa_don` ON `phu_kien`.`ma_phu_kien`=`chi_tiet_hoa_don`.`ma_phu_kien`
	   					GROUP BY `ma_phu_kien`,`ten_phu_kien`
                        HAVING sum(`so_luong`)>=2
                        ORDER BY sum(`so_luong`) desc
                        LIMIT 0,10');
	    return $this->loadAllRow();
	    
	}
}
?>
