<?php
include_once('controllers/Smarty_ung_dung.php');
include_once('./library/Pager.php');
class C_dich_vu
{
	public function About()
	{
		$smarty=new Smarty_ung_dung();	
		$smarty->display('dich_vu/v_about.tpl');
	}
	
	
	
}