<?php
include_once('controllers/C_thong_ke.php');
include_once('library/acl.php');
$c_thong_ke = new C_thong_ke();
if (isset($_GET['key'])){
    //xetquyen($_GET['key']);
    switch ($_GET['key']) {
        case 'thong-ke-thang':
        $c_thong_ke->ThongKe();
        break;
        case 'thong-ke-khach':
        $c_thong_ke->ThongKeTheoKhachHang();
        break;
        case 'thong-ke':
        $c_thong_ke->ThongKeDonHang();
        break;
        case 'trang-thai':
        $c_thong_ke->TrangThai();
        break;
        
        case 'cap-nhat':
        $c_thong_ke->CapNhatDonHang();
        break;
        case 'thanh-toan':
        $c_thong_ke->ThanhToan();
        break;
        case 'don-hang-moi':
        $c_thong_ke->DonHangMoi();
        break;
    }
}