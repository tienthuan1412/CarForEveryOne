<?php
include_once('controllers/C_nguoi_dung.php');
include_once('library/acl.php');
$c_nguoi_dung = new C_nguoi_dung();
if (isset($_GET['key'])){

	//xetquyen($_GET['key']);

	switch ($_GET['key']) {
		case 'quan-tri':
			$c_nguoi_dung->HeThongQuanTri();
			break;
		case 'dang-nhap':
			$c_nguoi_dung->DangNhap();
			break;
		case 'dang-xuat':
			$c_nguoi_dung->DangXuat();
			break;		
		case 'them-nguoi-dung':
			$c_nguoi_dung->ThemNguoiDung();
			break;	
		case 'xoa-nguoi-dung':
			$c_nguoi_dung->XoaNguoiDung();
			break;	
		case 'lock-screen':
			$c_nguoi_dung->LockScreen();
			break;	
		case 'profile':
			$c_nguoi_dung->profile();
			break;					
		case 'ds-nguoi-dung':
			$c_nguoi_dung->DSNguoiDung();
			break;
		case 'cap-nhat-nguoi-dung':
			$c_nguoi_dung->EditNguoiDung();
			break;
		case 'trang-thai':
			$c_nguoi_dung->TrangThai();
			break;
	}
}
?>