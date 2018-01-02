<?php
include_once('controllers/Smarty_ung_dung.php');
include_once('library/Pager.php');
include_once('library/Gio_Hang.php');
include_once('models/M_khach_hang.php');
require_once('library/twilio-php-master/Twilio/autoload.php');
use Twilio\Rest\Client;

class C_khach_hang
{
	public function GuiSMS($hoadon)
	{
		
		
// Your Account Sid and Auth Token from twilio.com/user/account
		$sid = "AC593ca18ce0b6a43a2710d9c231fdf6bb";
		$token = "d1681d9828778f3bc7b84c321a58e8e7";
		$client = new Client($sid, $token);
		$client->messages->create(
			"+84 968781809",
			array(
				'from' => "+14243721708",
				'body' => "Chúc mừng khách hàng ".$hoadon[0]['ten_khach_hang']." đã đặt hàng thành công.Cảm ơn đã sử dụng dịch vụ của chúng tôi!"
			)
		);	
	}

	public function ThemMatHangVaoGioHang()
	{
		if(isset($_POST['sanpham']))
		{
			$masanpham=$_POST['sanpham'];
			$soluong=1;
			$m_san_pham=new M_san_pham();
			$sanpham=$m_san_pham->getSanPham($masanpham);
			if($sanpham)
			{
				$gio_hang=new Gio_hang();
				if($sanpham['gia_khuyen_mai']>0)
					$gio_hang->Them($masanpham,$sanpham['ten_xe'],$sanpham['gia_khuyen_mai'],$soluong,$sanpham['hinh']);
				else
					$gio_hang->Them($masanpham,$sanpham['ten_xe'],$sanpham['don_gia'],$soluong,$sanpham['hinh']);
				echo number_format($gio_hang->TongSoLuong()) .' SP ('. number_format($gio_hang->TongSoTien()) . ' vnđ)';
			}
			else
			{
				echo '';
			}
		}
		else
		{
			echo '';
		}
		
	}
	public function ThemVaoGioHang()
	{
		if(isset($_POST['mbst']) && $_POST['so_luong'])
		{
			$mbts=$_POST['mbst'];
			$soluong=$_POST['so_luong'];
			$m_bo_suu_tap=new m_bo_suu_tap();
			$bosuutap=$m_bo_suu_tap->getBoSuuTap($mbst);
			if($bosuutap)
			{
				$gio_hang=new Gio_hang();
				if($bosuutap['gia_khuyen_mai']>0)
					$gio_hang->Them($mbst.'-bst',$bosuutap['ten_bo_suu_tap'],$bosuutap['gia_khuyen_mai'],$soluong,$bosuutap['hinh']);
				else
					$gio_hang->Them($mbst.'-td',$bosuutap['ten_bo_suu_tap'],$bosuutap['don_gia'],$soluong,$bosuutap['hinh']);
				echo number_format($gio_hang->TongSoLuong()) .' SP ('. number_format($gio_hang->TongSoTien()) . ' vnđ)';
			}
			else
			{
				echo '';
			}
		}
		else
		{
			echo '';
		}
	}
	public function ThongTinGioHang()
	{
		$gio_hang=new Gio_hang();
		if(isset($_POST['CapNhat']))
		{
			$TTGioHang=$gio_hang->ThongTinGioHang();
			foreach ($TTGioHang as $masanpham => $TT) {
				$SlMoi=$_POST['sl_'.$masanpham];
				if($SlMoi!=$TT[1])
					$gio_hang->CapNhatGioHang($masanpham,$SlMoi);
			}
		}

		$TTGioHang=$gio_hang->ThongTinGioHang();
		
		$smarty=new Smarty_ung_dung();

		if($TTGioHang)
		{
			$mangSanPham=array();
			$mangBoSuuTap=array();
			foreach ($TTGioHang as $ma => $TT) {
				if(strpos($ma,'-bst')!==false)
					$mangBoSuuTap[$ma]=$TT;
				else
					$mangSanPham[$ma]=$TT;
			}
			if(count($mangSanPham)>0)
				$smarty->assign('mangSanPham',$mangSanPham);
				
			if(count($mangBoSuuTap)>0)
				$smarty->assign('mangBoSuuTap',$mangBoSuuTap);
		}
		$smarty->display('khach_hang/v_thong_tin_gio_hang.tpl');
	}
	public function HuyGioHang()
	{
		$gio_hang=new Gio_hang();
		$gio_hang->HuyGioHang();
		header('location:'.path.'khach-hang/thong-tin-gio-hang.html');
	}
}