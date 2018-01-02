<?php
include_once('controllers/Smarty_ung_dung.php');
include_once('models/M_don_dat_hang.php');
class C_thong_ke
{
	public function ThongKe()
	{
		$ngaydi='';
		//$ngayden=date('Y-m-d');
		$smarty=new Smarty_ung_dung();
		if(isset($_POST['btnxacnhan']))
		{
			$ngay=$_POST['reservation'];
			$mang=explode('-',$ngay);
			$ngaybd=$mang[0];
			$mang1=explode(' ',$mang[1]);
			$ngaykt=$mang1[1];
			$ngaybd = new DateTime($ngaybd);
			$ngaybd = $ngaybd->format('Y-m-d');
			$ngaykt = new DateTime($ngaykt);
			$ngaykt = $ngaykt->format('Y-m-d');
			if($ngaybd && $ngaykt)
			{
				$m_don_dat_hang = new M_don_dat_hang();
				$DSDonDatHang=$m_don_dat_hang->DSDonDatHang($ngaybd,$ngaykt);
				if($DSDonDatHang)
				{
					$smarty=new Smarty_ung_dung();
					$smarty->assign('DSDonDatHang',$DSDonDatHang);
					$smarty->display('thong_ke/v_doc_ds_thong_ke_thang.tpl');
				}
				else
					header('location:'.path.'quan-tri/thong-ke/thong-ke-thang.html');            
			}
		}
		
		$smarty=new Smarty_ung_dung();
		$smarty->display('thong_ke/v_thong_ke_thang.tpl');
	}
	public function ThongKeTheoKhachHang()
	{
		$ngaydi='';
		//$ngayden=date('Y-m-d');
		$smarty=new Smarty_ung_dung();
		if(isset($_POST['btnxacnhan']))
		{
			$ngay=$_POST['reservation'];
			$mang=explode('-',$ngay);
			$ngaybd=$mang[0];
			$mang1=explode(' ',$mang[1]);
			$ngaykt=$mang1[1];
			$ngaybd = new DateTime($ngaybd);
			$ngaybd = $ngaybd->format('Y-m-d');
			$ngaykt = new DateTime($ngaykt);
			$ngaykt = $ngaykt->format('Y-m-d');
			$makh=$_POST['makh'];
			if($ngaybd && $ngaykt && $makh)
			{
				$m_don_dat_hang = new M_don_dat_hang();
				$DSDonDatHang=$m_don_dat_hang->DSDonDatHangTheoKhach($makh,$ngaybd,$ngaykt);

				if($DSDonDatHang)
				{
					$smarty=new Smarty_ung_dung();
					$smarty->assign('DSDonDatHang',$DSDonDatHang);
					$smarty->display('thong_ke/v_doc_ds_thong_ke_thang.tpl');
				}
				else
					header('location:'.path.'quan-tri/thong-ke/thong-ke-khach.html');            
			}
		}
		
		$smarty=new Smarty_ung_dung();
		$smarty->display('thong_ke/v_thong_ke_khach.tpl');
	}
	public function ThongKeDonHang()
	{
		$smarty=new Smarty_ung_dung();
		$m_don_dat_hang=new M_don_dat_hang();
		$DSDonDatHang=$m_don_dat_hang->getDSDonHang();
		$smarty->assign('DSDonDatHang',$DSDonDatHang);
		$smarty->display('thong_ke/v_doc_ds_thong_ke.tpl');
	}
	public function TrangThai()
	{
		$idhoa_don=$_POST['id'];
		$status=$_POST['status'];
		$m_don_dat_hang= new M_don_dat_hang();

		$data=$m_don_dat_hang->getDonHang($idhoa_don);
		

		$dataND=array(
			'idhoa_don'=>$data['idhoa_don'], 'idkhach_hang'=>$data['idkhach_hang'], 'ngay_dat'=>$data['ngay_dat'], 'tong_tien'=>$data['tong_tien'], 'tien_dat_coc'=>$data['tien_dat_coc'], 'con_lai'=>$data['con_lai'], 'hinh_thuc_thanh_toan'=>$data['hinh_thuc_thanh_toan'], 'ghi_chu'=>$data['ghi_chu'], 'status'=>$status
		);
		$m_don_dat_hang->EditDonHang($dataND);

		echo $status;

	}
	
	public function ThanhToan()
	{
		$idhoa_don=$_POST['id'];
		$m_don_dat_hang= new M_don_dat_hang();

		$data=$m_don_dat_hang->getDonHang($idhoa_don);
		if($data['hinh_thuc_thanh_toan']==1)
			$status=0;
		else
			$status=1;

		$dataND=array(
			'idhoa_don'=>$data['idhoa_don'], 'idkhach_hang'=>$data['idkhach_hang'], 'ngay_dat'=>$data['ngay_dat'], 'tong_tien'=>$data['tong_tien'], 'tien_dat_coc'=>$data['tien_dat_coc'], 'con_lai'=>$data['con_lai'], 'hinh_thuc_thanh_toan'=>$status, 'ghi_chu'=>$data['ghi_chu'], 'status'=>$data['status']
		);
		$m_don_dat_hang->EditDonHang($dataND);

		echo $status;

	}
	public function CapNhatDonHang()
	{
		$idhoa_don=$_GET['id'];
		$smarty=new Smarty_ung_dung();
		$m_don_dat_hang= new M_don_dat_hang();
		$data=$m_don_dat_hang->getDonHang($idhoa_don);
		$dataND=array(
			'idhoa_don'=>$data['idhoa_don'], 'idkhach_hang'=>$data['idkhach_hang'], 'ngay_dat'=>$data['ngay_dat'], 'tong_tien'=>$data['tong_tien'], 'tien_dat_coc'=>$data['tien_dat_coc'], 'con_lai'=>$data['con_lai'], 'hinh_thuc_thanh_toan'=>$data['hinh_thuc_thanh_toan'], 'ghi_chu'=>$data['ghi_chu'], 'status'=>$data['status']
		);
		if(isset($_POST['btnCapNhat']))
		{
			$dataND=array(
				'idhoa_don'=>$data['idhoa_don'], 'idkhach_hang'=>$data['idkhach_hang'], 'ngay_dat'=>$data['ngay_dat'], 'tong_tien'=>$data['tong_tien'], 'tien_dat_coc'=>$_POST['tien_dat_coc'], 'con_lai'=>$_POST['con_lai'], 'hinh_thuc_thanh_toan'=>$data['hinh_thuc_thanh_toan'], 'ghi_chu'=>$_POST['ghi_chu'], 'status'=>$data['status']
			);
			$m_don_dat_hang->EditDonHang($dataND);
			header('location:'.path.'quan-tri/thong-ke/thong-ke.html');
		}
		$smarty->assign('data',$dataND);
		$smarty->display('thong_ke/v_cap_nhat_don_hang.tpl');

	}
	public function DonHangMoi()
	{
		$smarty= new Smarty_ung_dung();
		$m_don_dat_hang=new M_don_dat_hang();
		echo $m_don_dat_hang->SoDonDatHangMoi();
	}
}
?>