<?php
include_once('controllers/C_khach_hang.php');
$c_khach_hang = new C_khach_hang();
if(isset($_GET['key']))
{
	switch ($_GET['key']) {
		case 'them-mat-hang':
			$c_khach_hang->ThemMatHangVaoGioHang();
			break;
		
		default:
			# code...
			break;
	}
}
?>