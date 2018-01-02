<?php
	session_start();
	chdir(dirname(__DIR__));
	define('path','http://localhost:81/ShowRoom/'); 
	require_once('smarty/libs/smarty.class.php');
	include_once('models/M_nguoi_dung.php');
	include_once('models/M_san_pham.php');
	include_once('models/M_loai_san_pham.php');
	include_once('models/M_don_dat_hang.php');
	include_once('models/M_phu_kien.php');
	include_once('models/M_lien_he.php');
	include_once('models/M_tin_tuc.php');
	include_once('models/M_role_resource.php');
	class Smarty_ung_dung extends smarty
	{		
		function __construct()
		{
			parent::__construct();
			$this->setTemplateDir('views/template/');
			$this->setConfigDir('views/config');
			$this->setCacheDir('views/cache');
			$this->setCompileDir('views/template_c');
			$this->assign(['path' => path]); 
			$m_nguoi_dung= new M_nguoi_dung();
			$this->assign('dsTimnguoidung',$m_nguoi_dung->TaoTimKiemNguoiDung());
			$m_san_pham= new M_san_pham();
			$this->assign('dsTimSanPham',$m_san_pham->TaoTimKiemSanPham());

			$m_loai_san_pham=new M_loai_san_pham();
			$this->assign('dsLoaiSanPhamMenu',$m_loai_san_pham->DSLoaiSanPhamCha());
			$m_don_dat_hang=new M_don_dat_hang();
			$this->assign('SoDonDatHangMoi',$m_don_dat_hang->SoDonDatHangMoi());
			$this->assign('DonDatHang',$m_don_dat_hang->getDSDonHangHeader());
		}
	}
?>