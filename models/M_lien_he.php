<?php
include_once('models/Database.php');
class M_lien_he extends Database
{
	public function ThemLienHe($data)
	{
		$sql='insert into lien_he(`ten`, `email`, `tieu_de`, `noi_dung`) values(?,?,?,?)';
		$this->setQuery($sql);
		return $this->execute(array($data['ten'], $data['email'], $data['tieu_de'], $data['noi_dung']));
		//return $this->lastInsertId();
	}
	public function getDSLienHe()
	{
		$this->setQuery('select * from lien_he where 1');
		return $this->loadAllRow();
	}
}