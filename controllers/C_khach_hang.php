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

	public function DangNhap()
	{	

		$smarty=new Smarty_ung_dung();
		$smarty->assign('ten_dang_nhap','');
		if(isset($_POST['submit']))
		{
			$ten_dang_nhap=$_POST['ten_dang_nhap'];
			$mat_khau=$_POST['mat_khau'];
			if(!empty($ten_dang_nhap) && !empty($mat_khau))
			{
				$m_khach_hang = new M_khach_hang();
				$khach_hang=$m_khach_hang->KhachHangDangNhap($ten_dang_nhap,$mat_khau);
				if($khach_hang)
				{
					$gio_hang=new Gio_hang();

					$SOHD=$m_khach_hang->ThemDonDatHang(array('idkhach_hang'=>$khach_hang['idkhach_hang'], 'ngay_dat'=>date('Y-m-d'), 'tong_tien'=>$gio_hang->TongSoTien(), 'tien_dat_coc'=>0, 'con_lai'=>$gio_hang->TongSoTien(), 'hinh_thuc_thanh_toan'=>1,'status'=>0, 'ghi_chu'=>''));
					
					$ttGH=$gio_hang->ThongTinGioHang();
					foreach ($ttGH as $masanpham => $TT) {
						
								$dataChiTiet=array('idhoa_don'=>$SOHD, 'idxe'=>$masanpham , 'so_luong'=>$TT[1], 'don_gia'=>$TT[0], 'san_pham_bst'=>0);

								$m_khach_hang->ThemChiTietHoaDon($dataChiTiet);													
					}
					$gio_hang->HuyGioHang();
					header('location:'.path.'khach-hang/thong-tin-don-dat-hang/'.$SOHD);
				}
				else
					$smarty->assign('err','Đăng nhập không thành công');
			}
			else
			{
				$smarty->assign('ten_dang_nhap',$ten_dang_nhap);
				$smarty->assign('err','Vui lòng nhập thông tin đầy đủ');
			}
		}
		$smarty->display('khach_hang/v_dang_nhap.tpl');
	}
	public function ThongTinDonDatHang()
	{
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$m_khach_hang = new M_khach_hang();
			$DonDatHang=$m_khach_hang->DonDatHang($id);
			if(!$DonDatHang)
				header('location:'.path);
			$smarty=new Smarty_ung_dung();
			$smarty->assign('DonDatHang',$DonDatHang);
			$smarty->display('khach_hang/v_thong_tin_don_dat_hang.tpl');
			$this->guiMail($DonDatHang);
			$this->GuiSMS($DonDatHang);
						
		}
		else
			header('location:'.path);
	}
	public function guiMail($HoaDon)
    {
        require 'library/PHPMailer/PHPMailerAutoload.php';       
        $mail = new PHPMailer;      
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 2;        
        $mail->Debugoutput = 'html';     
        $mail->SMTPSecure='ssl';  
        
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;        
        $mail->SMTPAuth = true; 
        $mail->CharSet="utf-8";       
        $mail->Username = "truongcongminh96@gmail.com";        
        $mail->Password = "minhdeptrai96";        
        $mail->setFrom('truongcongminh96@gmail.com', 'Showroom');                       
        $mail->addAddress($HoaDon[0]['email'], $HoaDon[0]['ten_khach_hang']);       
        $mail->Subject = 'Thông tin đơn đặt hàng';                       
        $mail->msgHTML($this->noi_dung_gui_mail($HoaDon)); 
          
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
    }

    public function noi_dung_gui_mail($hoadon)
    {
        $noi_dung='
        <table align="center" cellspacing="10px" border="0" style="border:1px solid #00F;" width="90%">
            <tr>
                <td style="padding-left:20px">Mã khách hàng</td>
                <td width="250px">'.$hoadon[0]['idkhach_hang'].'</td>
                <td>Tên khách hàng</td>
                <td>'.$hoadon[0]['ten_khach_hang'].'</td>
            </tr>
                <tr>
                <td style="padding-left:20px">Địa chỉ</td>
                <td>'.$hoadon[0]['dia_chi'].'</td>
                <td>Điện thoại</td>
                <td>'.$hoadon[0]['dien_thoai'].'</td>
            </tr>
                <tr>
                <td style="padding-left:20px">Số hóa đơn</td>
                <td>'.$hoadon[0]['idhoa_don'].'</td>
                <td>Ngày đặt</td>
                <td>'.$hoadon[0]['ngay_dat'].'</td>
            </tr>
            <tr>
            <td colspan="4">
                <table align="center" cellspacing="10px" border="0" width="100%">
                    <tr bgcolor="#999999"><td>STT</td><td>Mã sản phẩm</td><td>Tên sản phẩm</td><td>Đơn giá</td><td>Số lượng</td><td>Thành thiền</td></tr>';
            $i=1;$tt=0;
            foreach($hoadon as $item)
            {
                $noi_dung.='<tr>';
                $noi_dung.= '<td>'.$i.'</td>';
                $noi_dung.= '<td>'.$item['idxe'].'</td>';
                $noi_dung.= '<td>'.$item['ten'].'</td>';
                $noi_dung.= '<td>'.$item['don_gia'].'</td>';
                $noi_dung.= '<td>'.$item['so_luong'].'</td>';
                $noi_dung.= '<td>'.number_format($item['don_gia']*$item['so_luong']).'</td>';
                $noi_dung.='</tr>';
                $tt=$tt+$item['so_luong']*$item['don_gia'];
                $i++;
            }
            $noi_dung.='<tr><td colspan="5">Tổng trị giá hóa đơn</td><td>'.number_format($tt).'</td></tr>';    
          $noi_dung.='</table>        
            </td>
            </tr>
        </table>        
        ';
        return $noi_dung;
    }
	public function DangKy()
	{
		$dataKhachHang=array('ten_khach_hang'=>'', 'phai'=>0, 'email'=>'', 'dia_chi'=>'', 'dien_thoai'=>'', 'ghi_chu'=>'', 'ten_dang_nhap'=>'', 'mat_khau'=>'');
		$dataErr=array('ten_khach_hang'=>'', 'phai'=>0, 'email'=>'', 'dia_chi'=>'', 'dien_thoai'=>'', 'ghi_chu'=>'', 'ten_dang_nhap'=>'', 'mat_khau'=>'');
		if(isset($_POST['dangky']))
		{
			$dataKhachHang=array(
				'ten_khach_hang'=>$_POST['ten_khach_hang'],
				'phai'=>$_POST['phai'], 
				'email'=>$_POST['email'], 
				'dia_chi'=>$_POST['dia_chi'], 
				'dien_thoai'=>$_POST['dien_thoai'], 
				'ghi_chu'=>$_POST['ghi_chu'], 
				'ten_dang_nhap'=>$_POST['ten_dang_nhap'], 
				'mat_khau'=>$_POST['mat_khau']
				);
			$res=1;
			$dataErr=$this->KiemTraDuLieu($dataKhachHang,$res);
			if($res==1)
			{
				$m_khach_hang = new M_khach_hang();
				$res=$m_khach_hang->ThemKhachHang($dataKhachHang);
				if($res)
					header('location:'.path.'khach-hang/dat-hang.html');
				else
					$dataErr['mss']='Thêm không thành công';
			}
		}
		$smarty=new Smarty_ung_dung();
		$smarty->assign('data',$dataKhachHang);
		$smarty->assign('dataErr',$dataErr);
		$smarty->display('khach_hang/v_dang_ky.tpl');
	}
	public function KiemTraDuLieu($data, &$res)	
	{
		$dataErr=array('ten_khach_hang'=>'', 'phai'=>0, 'email'=>'', 'dia_chi'=>'', 'dien_thoai'=>'', 'ghi_chu'=>'', 'ten_dang_nhap'=>'', 'mat_khau'=>'');
		if(empty($data['ten_khach_hang']))
		{
			$res=0;
			$dataErr['ten_khach_hang']='*';
		}
		if(empty($data['email']))
		{
			$res=0;
			$dataErr['email']='*';
		}
		if(empty($data['dia_chi']))
		{
			$res=0;
			$dataErr['dia_chi']='*';
		}
		if(empty($data['dien_thoai']))
		{
			$res=0;
			$dataErr['dien_thoai']='*';
		}
		if(empty($data['ten_dang_nhap']))
		{
			$res=0;
			$dataErr['ten_dang_nhap']='*';
		}
		if(empty($data['mat_khau']))
		{
			$res=0;
			$dataErr['mat_khau']='*';
		}
		return $dataErr;
	}
}