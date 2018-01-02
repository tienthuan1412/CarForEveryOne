<?php
include_once('models/Database.php');
class M_tin_tuc extends Database
{
	
	public function getDSTrongNgay()
	{
		$this->setQuery('select * from tin_tuc where so_luot_xem=1');
		return $this->loadAllRow();
	}
	public function getDSTinTucPhanTrang($start,$limit)
	{
		$this->setQuery("select * from tin_tuc limit $start,$limit");
		return $this->loadAllRow();
	}
	public function getTinTuc($id)
	{
		$this->setQuery('select * from tin_tuc where ma_tin_tuc=?');
		return $this->loadRow(array($id));
	}
	public function getTimTinTuc($value)
	{
		$tam='%'.$value . '%';
		$this->setQuery('select * from tin_tuc where tieu_de like ?');
		return $this->loadRow(array($tam));
	}
	public function TongSoTinTuc(){
		$this->setQuery("SELECT * FROM tin_tuc where 1");
		return $this->countAll();
	}
	public function ThemTinTuc($data)
	{
		$sql='insert into tin_tuc(`tieu_de`, `tieu_de_url`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`) values(?,?,?,?,?,?,?,?,?)';
		$this->setQuery($sql);
		return $this->execute(array($data['tieu_de'], $data['tieu_de_url'], $data['tom_tat'], $data['chi_tiet'], $data['hinh'], $data['tac_gia'], $data['ngay_dang'], $data['ngay_gui'], $data['so_luot_xem']));
	}
	public function CapNhatTinTuc($data)
	{
		$this->setQuery('update tin_tuc set `tieu_de`=?, `tieu_de_url`=?, `tom_tat`=?, `chi_tiet`=?, `hinh`=?, `tac_gia`=?, `ngay_dang`=?, `ngay_gui`=?, `so_luot_xem`=? where ma_tin_tuc=?');
		return $this->execute(array($data['tieu_de'], $data['tieu_de_url'], $data['tom_tat'], $data['chi_tiet'], $data['hinh'], $data['tac_gia'], $data['ngay_dang'],$data['ngay_gui'], $data['so_luot_xem'], $data['ma_tin_tuc']));	

	}
	public function XoaTinTuc($ma_tin_tuc)
	{
		$this->setQuery('delete from tin_tuc where ma_tin_tuc=?');
		return $this->execute(array($ma_tin_tuc));
	}
	public function TaoTimKiemTinTuc()
	{
		$this->setQuery("select tieu_de, ma_tin_tuc from tin_tuc");
		return $this->loadAllRow();
	}
	public function TimKiemTinTucURL($matin)
	{
		$ten="'%". $matin . "%'";
		$this->setQuery("select * from tin_tuc where ma_tin_tuc like ?");
		return $this->loadAllRow(array($matin));
	}
}
?>
