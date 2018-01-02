<?php
include_once('models/Database.php');
class M_loai_san_pham extends Database
{
	public function DSLoaiSanPhamCha()
	{
		$this->setQuery('select ten_hang,ten_hang_url from hang_xe_hoi where 1');
		return $this->loadAllRow();
	}
	public function getLoaiSanPhamCha($chuoiURL)
	{
		$this->setQuery('select * from hang_xe_hoi where ten_hang_url=?');
		return $this->loadRow(array($chuoiURL));
	}
	public function getMaLoaiSanPhamConCuaCha($idhang_xe)
	{
		$this->setQuery('select idhang_xe from hang_xe_hoi where idhang_xe=?');
		$query= $this->loadAllRow(array($idhang_xe));		
		$mang=array();
		if($query)
		{
			foreach ($query as $value) {
				$mang[]=$value['idhang_xe'];
			}
		}
		return $mang;
	}
	public function DSLoaiSanPham()
	{
		$this->setQuery('select * from hang_xe_hoi');
		return $this->loadAllRow();
	}
	public function DSLoaiSanPham_con($idhang_xe)
	{
		$this->setQuery('select * from hang_xe_hoi where idhang_xe=?');
		return $this->loadAllRow(array($idhang_xe));
	}
}