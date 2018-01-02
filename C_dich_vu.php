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
	
	
	public function DichVu()
	{
		$smarty=new Smarty_ung_dung();
		$smarty->display('dich_vu/v_dich_vu.tpl');
	}

	public function LienHe()
	{
		$smarty=new Smarty_ung_dung();
		$dataLienHe=array(
			'ten'=>'', 
			'email'=>'', 
			'tieu_de'=>'', 
			'noi_dung'=>''
		);
		$dataErr=array('ten'=>'', 'email'=>'', 'tieu_de'=>'', 'noi_dung'=>'');
		if(isset($_POST['gui']))
		{
			$dataLienHe=array(
				'ten'=>$_POST['ten'],
				'email'=>$_POST['email'], 
				'tieu_de'=>$_POST['tieu_de'], 
				'noi_dung'=>$_POST['noi_dung']
				);
			$res=1;
			$dataErr=$this->KiemTraDuLieu($dataLienHe,$res);
			if($res==1)
			{
				$m_lien_he = new M_lien_he();
				$res=$m_lien_he->ThemLienHe($dataLienHe);
				if($res)
					header('location:'.path.'lien-he.html');
				else
					$dataErr['mss']='Thêm không thành công';
			}
		}
		$m_lien_he=new M_lien_he();
		$smarty->assign('data',$dataLienHe);
		$smarty->assign('dataErr',$dataErr);
		$smarty->display('dich_vu/v_lien_he.tpl');
	}
}