<?php
include_once('controllers/C_dich_vu.php');
$c_dich_vu = new C_dich_vu();
if(isset($_GET['key']))
{
	switch ($_GET['key']) {
		case 'about':
			$c_dich_vu->About();
			break;
		case 'dich-vu':
			$c_dich_vu->DichVu();
			break;
		case 'lien-he':
			$c_dich_vu->LienHe();
			break;
		case 'tin-nhan-khach-hang':
			$c_dich_vu->DSLienHe();
			break;
		default:
			# code...
			break;
	}
}
?>