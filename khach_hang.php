<?php
include_once('controllers/C_khach_hang.php');
include_once('library/acl.php');
$c_khach_hang = new C_khach_hang();
if(isset($_GET['key']))
{
	//xetquyen($_GET['key']);
	switch ($_GET['key']) {
		case 'them-mat-hang':
			$c_khach_hang->ThemMatHangVaoGioHang();
			break;
		case 'them-bo-suu-tap':
			$c_khach_hang->ThemBoSuuTapVaoGioHang();
			break;
		case 'thong-tin-gio-hang':
			$c_khach_hang->ThongTinGioHang();
			
			break;
		case 'huy-gio-hang':
			$c_khach_hang->HuyGioHang();
			break;
		case 'dat-hang':
			$c_khach_hang->DangNhap();
			break;
			
		case 'khach-hang-dang-ky':
			$c_khach_hang->DangKy();
			break;
		case 'thong-tin-don-dat-hang':
			$c_khach_hang->ThongTinDonDatHang();
			break;
		case 'don-hang-moi':
			$c_khach_hang->DonHangMoi();
		default:
			# code...
			break;
	}
}
?>