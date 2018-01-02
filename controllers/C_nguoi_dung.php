<?php
include_once('controllers/Smarty_ung_dung.php');
include_once('models/M_nguoi_dung.php');
class C_nguoi_dung
{
	public function DangNhap()
	{
		$username='';
		$smarty=new Smarty_ung_dung();
		if(isset($_POST['btnDangNhap']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			if(!empty($username) && !empty($password))
			{
				$m_nguoi_dung=new M_nguoi_dung();
				$nguoi_dung=$m_nguoi_dung->getNguoiDungDangNhap($username, md5($password));
				if($nguoi_dung)
				{
					$_SESSION['fullname']=$nguoi_dung['fullname'];
					$_SESSION['role']=$nguoi_dung['role'];
					$_SESSION['username']=$nguoi_dung['username'];
					$_SESSION['iduser']=$nguoi_dung['iduser'];
					$_SESSION['hinh']=$nguoi_dung['hinh'];
					header('location:'.path.'quan-tri.html');
				}
				else
					$smarty->assign('err','Đăng nhập không thành công');    

			}
			else
				$smarty->assign('err','Vui lòng nhập đầy đủ thông tin');
		}
		
		$smarty->assign('username',$username);
		$smarty->display('nguoi_dung/v_login.tpl');
	}
	public function LockScreen()
	{
		if(!isset($_SESSION['username']))
			header('location:'.path.'quan-tri/nguoi-dung/dang-nhap.html');
		$smarty=new Smarty_ung_dung();  
		if(isset($_POST['btnDangNhap']))
		{
			$username=$_SESSION['username'];
			$password=$_POST['password'];
			if(!empty($username) && !empty($password))
			{
				$m_nguoi_dung=new M_nguoi_dung();
				$nguoi_dung=$m_nguoi_dung->getNguoiDungDangNhap($username, md5($password));
				if($nguoi_dung)
				{
					header('location:'.path.'index.html');
				}
				else
					$smarty->assign('err','Đăng nhập không thành công');    

			}
			else
				$smarty->assign('err','Vui lòng nhập đầy đủ thông tin');
		}
		
		$smarty->display('nguoi_dung/lock_screen.tpl');
	}
	

}
