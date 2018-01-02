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

	
}