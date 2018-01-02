<?php
include_once('controllers/C_san_pham.php');
include_once('library/acl.php');
$c_san_pham = new C_san_pham();

if(isset($_GET['key']))
{
	//xetquyen($_GET['key']);
	switch ($_GET['key']) {
		case 'ds-san-pham-km':
		$c_san_pham->DSSanPhamKhuyenMai();
		break;
		case 'trang-thai':
		$c_san_pham->TrangThai();
		break;
		case 'trang-thai-hang-xe':
		$c_san_pham->TrangThaiHangXe();
		break;
		case 'ct-san-pham':
		$c_san_pham->ChiTietSanPham();
		break;
		case 'index':
		$c_san_pham->index();
		break;
		case 'ds-san-pham-loai-cha':
		$c_san_pham->DSSanPhamLoaiCha();
		break;
		case 'danh-sach-san-pham':
		$c_san_pham->DSSanPham();
		break;  
		case 'ds-san-pham-admin':
		$c_san_pham->DSSanPhamnAdmin();
		break;  
		case 'them-san-pham':
		$c_san_pham->ThemSanPham();
		break;
		case 'cap-nhat-san-pham':
		$c_san_pham->CapNhatSanPham();
		break;
		case 'xoa-san-pham':
		$c_san_pham->XoaSanPham();
		break;
		case 'san-pham-ban-chay':
		$c_san_pham->SanPhamBanChay();
		break;

		case 'ds-hang-xe-admin':
		$c_san_pham->DSHangXe();
		break;
		case 'them-hang-xe':
		$c_san_pham->ThemHangXe();
		break;
		case 'cap-nhat-hang-xe':
		$c_san_pham->CapNhatHangXe();
		break;
		default:
			# code...
		break;
	}
}
?>