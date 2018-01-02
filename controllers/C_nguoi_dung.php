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
	public function HeThongQuanTri()
	{
		if(!isset($_SESSION['username']))
			header('location:'.path.'quan-tri/nguoi-dung/dang-nhap.html');
		$smarty=new Smarty_ung_dung();
		$m_don_dat_hang=new M_don_dat_hang();
		$tong_don_hang=$m_don_dat_hang->SoDonDatHangMoi();
		$smarty->assign('tong_don_hang',$tong_don_hang);
		$m_nguoi_dung=new M_nguoi_dung();
		$tong_nguoi_dung=$m_nguoi_dung->DemDSNguoiDung();
		$smarty->assign('tong_nguoi_dung',$tong_nguoi_dung);
		$m_san_pham=new M_san_pham();
		$tong_sp=$m_san_pham->DemSoSanPham();
		$smarty->assign('tong_sp',$tong_sp);
		$m_tin_tuc=new M_tin_tuc();
		$tong_tin=$m_tin_tuc->TongSoTinTuc();
		$smarty->assign('tong_tin',$tong_tin);
		$smarty->display('nguoi_dung/v_he_thong.tpl');
	}
	public function DangXuat()
	{
		
		session_unset($_SESSION['role']);
		session_unset($_SESSION['username']);
		session_unset($_SESSION['iduser']);
		session_unset($_SESSION['hinh']);
		header('location:'.path.'quan-tri/nguoi-dung/dang-nhap.html');
	}
	public function DSNguoiDung()
	{
		if(!isset($_SESSION['username']))
			header('location:'.path.'quan-tri/nguoi-dung/dang-nhap.html');
		try
		{
			$m_nguoi_dung=new M_nguoi_dung();
			$query=$m_nguoi_dung->getDSNguoiDung();
			
			$smarty=new Smarty_ung_dung();
			$smarty->assign('DSNguoiDung',$query);
			$smarty->display('nguoi_dung/v_doc_ds_Nguoi_dung.tpl');

		}
		catch(PDOException $e)
		{
			echo $e->getMessgae();
		}
		$pdo=NULL;
	}
	public function EditNguoiDung()
	{
		if(!isset($_SESSION['username']))
			header('location:'.path.'quan-tri/nguoi-dung/dang-nhap.html');
		$maND=$_GET['id'];
		$smarty=new Smarty_ung_dung();
		$m_nguoi_dung= new M_nguoi_dung();
		$data=$m_nguoi_dung->getNguoiDung($maND);
		$dataND=array(
			'username'=>$data['username'], 'password'=>$data['password'], 'fullname'=>$data['fullname'], 'birthday'=>$data['birthday'], 'gender'=>$data['gender'], 'address'=>$data['address'], 'email'=>$data['email'], 'identitycard'=>$data['identitycard'], 'mobiphone'=>$data['mobiphone'], 'role'=>$data['role'], 'hinh'=>$data['hinh'], 'status'=>$data['status']
		);
		if(isset($_POST['btnCapNhat']))
		{
			$dataND=array(
				'iduser'=>$data['iduser'], 
				'username'=>$_POST['username'], 
				'password'=>md5($_POST['password']), 
				'fullname'=>$_POST['fullname'], 
				'birthday'=>$_POST['birthday'], 
				'gender'=>isset($_POST['gender'])?1:0,
				'address'=>$_POST['address'], 
				'email'=>$_POST['email'], 
				'identitycard'=>$_POST['identitycard'], 
				'mobiphone'=>$_POST['mobiphone'], 
				'role'=>$_POST['role'], 
				'hinh'=>$data['hinh'],
				'status'=>isset($_POST['status'])?1:0,      );
			$kiemtra=$this->KiemTraDuLieu($dataND);
			if(empty($kiemtra))
			{
				
				$m_nguoi_dung=new M_nguoi_dung();
				$m_nguoi_dung->EditNguoiDung($dataND);
				header('location:'.path.'quan-tri/nguoi-dung/danh-sach-nguoi-dung.html');   
			}
			else
				$smarty->assign('err',$kiemtra);

		}
		
		
		$smarty->assign('data',$dataND);
		$smarty->display('nguoi_dung/v_cap_nhat_nguoi_dung.tpl');
	}

}
