<?php
include_once('controllers/Smarty_ung_dung.php');
include_once('./library/Pager.php');
class C_san_pham
{
	public function index()
	{
		$smarty=new Smarty_ung_dung();
		$smarty->display('index.tpl');
	}
	

}
?>