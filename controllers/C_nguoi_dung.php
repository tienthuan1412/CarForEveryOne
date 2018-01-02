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
	public function ThemNguoiDung()
	{
		if(!isset($_SESSION['username']))
			header('location:'.path.'quan-tri/nguoi-dung/dang-nhap.html');
		$smarty=new Smarty_ung_dung();
		$dataNguoiDung=array(
			'username'=>'', 'password'=>'', 'fullname'=>'', 'birthday'=>date('Y-m-d'), 'gender'=>0, 'address'=>'', 'email'=>'', 'identitycard'=>'', 'mobiphone'=>'', 'role'=>'', 'hinh'=>'', 'status'=>0
		);
		if(isset($_POST['btnThem']))
		{
			$dataNguoiDung=array(
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
				'hinh'=>'',
				'status'=>isset($_POST['status'])?1:0,
			);
			$kiemtra=$this->KiemTraDuLieu($dataNguoiDung);
			$username=$_POST['username'];
			if(!empty($username))
			{
				$m_nguoi_dung=new M_nguoi_dung();
				$nguoi_dung=$m_nguoi_dung->checkNguoiDungDangNhap($username);
				if($nguoi_dung)
				{
					$smarty->assign('err','Tên đăng nhập đã tồn tại');
				}
				else
				{   
					if(empty($kiemtra))
					{
						$hinh=$_FILES['hinh'];
						if($hinh['error']==0)
						{
							$arrType=array('image/jpeg','image/jpg','image/png');
							if(array_search($hinh['type'], $arrType)!==false)
							{
								if($hinh['size']<2000000)
								{
									$name=time().$hinh['name'];
									move_uploaded_file($hinh['tmp_name'], './public/admin/images/'.$name);
									$dataND['hinh']=$name;
									$m_nguoi_dung=new M_nguoi_dung();
									$m_nguoi_dung->AddNguoiDung($dataND);
									header('location:'.path.'quan-tri/nguoi-dung/danh-sach-nguoi-dung.html');
								}
								else
									$smarty->assign('err','Chỉ chọn hình <2MB');        
							}
							else
								$smarty->assign('err','Chỉ chọn file hình');    
						}
						else
							$smarty->assign('err','Phải chọn hình ảnh');
						$m_nguoi_dung=new M_nguoi_dung();
						$m_nguoi_dung->AddNguoiDung($dataNguoiDung);
						header('location:'.path.'quan-tri/nguoi-dung/danh-sach-nguoi-dung.html');

					}
					else
						$smarty->assign('err',$kiemtra);
				}

			}
		}
		$m_nguoi_dung=new M_nguoi_dung();
		$smarty->assign('DSNguoiDung',$m_nguoi_dung->getDSNguoiDung());
		$smarty->assign('data',$dataNguoiDung);
		$smarty->display('nguoi_dung/v_them_nguoi_dung.tpl');
	}
	public function KiemTraDuLieu($data)
	{
		$ketqua='';
		if(empty($data['username']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['password']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['fullname']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['birthday']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['address']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['email']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(!is_numeric($data['identitycard']))
		{
			$ketqua='Số CMND phải nhập là số';
			return $ketqua;
		}
		if(empty($data['role']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(!is_numeric($data['mobiphone']))
		{
			$ketqua='Số điện thoại phải nhập số';
			return $ketqua;
		}
	}
	public function XoaNguoiDung()
	{
		if(!isset($_SESSION['username']))
			header('location:'.path.'quan-tri/nguoi-dung/dang-nhap.html');
		$maND=$_GET['iduser'];
		$m_nguoi_dung= new M_nguoi_dung();
		$m_nguoi_dung->DeleteNguoiDung($maND);
		header('location:'.path.'quan-tri/nguoi-dung/danh-sach-nguoi-dung.html');
	}
	public function TrangThai()
	{
		$iduser=$_POST['id'];
		$m_nguoi_dung= new M_nguoi_dung();

		$data=$m_nguoi_dung->getNguoiDung($iduser);
		if($data['status']==1)
			$status=0;
		else
			$status=1;

		$dataND=array(
			'iduser'=>$data['iduser'], 'username'=>$data['username'], 'password'=>$data['password'], 'fullname'=>$data['fullname'], 'birthday'=>$data['birthday'], 'gender'=>$data['gender'], 'address'=>$data['address'], 'email'=>$data['email'], 'identitycard'=>$data['identitycard'], 'mobiphone'=>$data['mobiphone'], 'role'=>$data['role'], 'hinh'=>$data['hinh'], 'status'=> $status
		);
		$m_nguoi_dung->EditNguoiDung($dataND);

		echo $status;

	}
	/*public function EditNguoiDung {
		if(!isset($_SESSION['username']))
			header('location:'.path.'quan-tri/nguoi-dung/dang-nhap.html');
		$maND=$_GET['id'];
		$smarty=new Smarty_ung_dung();
		$m_nguoi_dung= new M_nguoi_dung();
		$data=$m_nguoi_dung->getNguoiDung($maND);
		$dataNguoiDung=array(
			'username'=>$data['username'], 'password'=>$data['password'], 'fullname'=>$data['fullname'], 'birthday'=>$data['birthday'], 'gender'=>$data['gender'], 'address'=>$data['address'], 'email'=>$data['email'], 'identitycard'=>$data['identitycard'], 'mobiphone'=>$data['mobiphone'], 'role'=>$data['role']
			);
		if(isset($_POST['btnCapNhat']))
		{
			$dataNguoiDung=array(
				'username'=>$_POST['username'], 
				'password'=>$_POST['password'], 
				'fullname'=>$_POST['fullname'], 
				'birthday'=>$_POST['birthday'], 
				'gender'=>isset($_POST['gender'])?1:0,
				'address'=>$_POST['address'], 
				'email'=>$_POST['email'], 
				'identitycard'=>$_POST['identitycard'], 
				'mobiphone'=>$_POST['mobiphone'], 
				'role'=>$_POST['role'], 
				'iduser'=>$maND
				);
			$kiemtra=$this->KiemTraDuLieu($dataNguoiDung);
			if(empty($kiemtra))
			{
				$m_nguoi_dung=new M_nguoi_dung();
				$m_nguoi_dung->EditNguoiDung($dataNguoiDung);
				header('location:'.path.'quan-tri/nguoi-dung/danh-sach-nguoi-dung.html');   
			}
			else
				$smarty->assign('err',$kiemtra);

		}
		$m_nguoi_dung=new M_nguoi_dung();
		$smarty->assign('DSNguoiDung',$m_nguoi_dung->getDSNguoiDung());
		$smarty->assign('data',$dataNguoiDung);
		$smarty->display('nguoi_dung/v_cap_nhat_nguoi_dung.tpl');
	}*/
	public function profile()
	{
		if(!isset($_SESSION['username']))
			header('location:'.path.'quan-tri/nguoi-dung/dang-nhap.html');
		$maND=$_SESSION['iduser'];
		$smarty=new Smarty_ung_dung();
		$m_nguoi_dung= new M_nguoi_dung();
		$data=$m_nguoi_dung->getNguoiDung($maND);
		$dataNguoiDung=array(
			'username'=>$data['username'], 'password'=>$data['password'], 'fullname'=>$data['fullname'], 'birthday'=>$data['birthday'], 'gender'=>$data['gender'], 'address'=>$data['address'], 'email'=>$data['email'], 'identitycard'=>$data['identitycard'], 'mobiphone'=>$data['mobiphone'], 'role'=>$data['role']
		);
		$smarty->assign('data',$dataNguoiDung);
		$smarty->display('nguoi_dung/profile.tpl');
	}

}
