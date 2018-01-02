<?php
include_once('controllers/C_phu_kien.php');
include_once('library/acl.php');
$c_phu_kien = new C_phu_kien();

if(isset($_GET['key']))
{
	//xetquyen($_GET['key']);
	switch ($_GET['key']) {
		case 'ds-phu-kien-km':
		$c_phu_kien->DSPhuKienKhuyenMai();
		break;
		case 'trang-thai':
		$c_phu_kien->TrangThai();
		break;
		case 'trang-thai-hang-xe':
		$c_phu_kien->TrangThaiHangXe();
		break;
		case 'ct-phu-kien':
		$c_phu_kien->ChiTietPhuKien();
		break;
		case 'index':
		$c_phu_kien->index();
		break;
		case 'ds-phu-kien-loai-cha':
		$c_phu_kien->DSPhuKienLoaiCha();
		break;
		case 'danh-sach-phu-kien':
		$c_phu_kien->DSPhuKien();
		break;  
		case 'ds-phu-kien-admin':
		$c_phu_kien->DSPhuKiennAdmin();
		break;  
		case 'them-phu-kien':
		$c_phu_kien->ThemPhuKien();
		break;
		case 'cap-nhat-phu-kien':
		$c_phu_kien->CapNhatPhuKien();
		break;
		case 'xoa-phu-kien':
		$c_phu_kien->XoaPhuKien();
		break;
		case 'phu-kien-ban-chay':
		$c_phu_kien->PhuKienBanChay();
		break;

		case 'ds-hang-xe-admin':
		$c_phu_kien->DSHangXe();
		break;
		case 'them-hang-xe':
		$c_phu_kien->ThemHangXe();
		break;
		case 'cap-nhat-hang-xe':
		$c_phu_kien->CapNhatHangXe();
		break;
		default:
			# code...
		break;
	}
}
?>