<?php
include_once('controllers/C_tin_tuc.php');
$c_tin_tuc = new C_tin_tuc();
if(isset($_GET['key']))
{
	
	switch ($_GET['key']) {
		
		case 'ct-tin-tuc':
			$c_tin_tuc->ChiTietTinTuc();
			break;
		case 'danh-sach-tin-tuc':
			$c_tin_tuc->DSTinTuc();
			break;	
		case 'them-tin-tuc':
			$c_tin_tuc->ThemTinTuc();
			break;
		case 'ds-tin-tuc':
			$c_tin_tuc->DSTinTucAdmin();
			break;
		case 'cap-nhat-tin-tuc':
			$c_tin_tuc->CapNhatTinTuc();
			break;	
		case 'xoa-tin-tuc':
			$c_tin_tuc->XoaTinTuc();
			break;	
		default:
			# code...
			break;
	}
}
?>