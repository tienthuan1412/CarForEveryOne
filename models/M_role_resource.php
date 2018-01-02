<?php
include_once('models/Database.php');
class M_role_resource extends Database
{
	public function laykihieu($kihieu)
	{
		$this->setQuery('select * from role_resource where kihieu=?');
		return $this->loadRow(array($kihieu));
	}
}
?>