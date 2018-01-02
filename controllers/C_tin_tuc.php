<?php
include_once('controllers/Smarty_ung_dung.php');
include_once('./library/Pager.php');
include_once('models/M_tin_tuc.php');
class C_tin_tuc
{
	public function index()
	{
		$smarty=new Smarty_ung_dung();
		$smarty->display('index.tpl');
	}
	public function DSTinTuc()
	{
		$m_tin_tuc = new M_tin_tuc();
		$pager = new Pager();
		$limit = 20;
		$start = $pager->findStart($limit);
		$count = $m_tin_tuc->TongSoTinTuc();
		$numPage = $pager->findPages($count, $limit);
		$DSTinTuc = $m_tin_tuc->getDSTinTucPhanTrang($start, $limit);
		$LinkPage = $pager->pageList($_GET['page'], $numPage);
		$smarty = new Smarty_ung_dung();
		$smarty->assign('DSTinTuc', $DSTinTuc);
		$smarty->assign('LinkPage', $LinkPage);
		$smarty->display('tin_tuc/v_doc_ds_tin_tuc.tpl');
	}
	public function ChiTietTinTuc()
	{
		if(!isset($_GET['id']))
			header('location:'.path);
		$chuoi_url=$_GET['id'];
		$mang=explode('-',$chuoi_url);
		$id=$mang[count($mang)-1];
		$m_tin_tuc = new M_tin_tuc();
		$tin_tuc=$m_tin_tuc->getTinTuc($id);
		if(!$tin_tuc)
			header('location:'.path);
		$smarty=new Smarty_ung_dung();
		$smarty->assign('CTTin',$tin_tuc);
		$smarty->display('tin_tuc/v_doc_ct_tin_tuc.tpl');
	}

	public function DSTinTucAdmin()
	{
		$m_tin_tuc = new M_tin_tuc();
		$pager=new Pager();
		$limit=12;
		$start=$pager->findStart($limit);
		$count=$m_tin_tuc->TongSoTinTuc();
		$numPage=$pager->findPages($count, $limit);
		$DSTinTuc=$m_tin_tuc->getDSTinTucPhanTrang($start,$limit);
		$LinkPage=$pager->pageList_admin($_GET['page'], $numPage);
		$smarty=new Smarty_ung_dung();
		$smarty->assign('DSTinTuc',$DSTinTuc);
		$smarty->assign('LinkPage',$LinkPage);
		$smarty->display('tin_tuc/v_doc_ds_tin_tuc_admin.tpl');
	}

	public function ThemTinTuc()
	{
		$smarty=new Smarty_ung_dung();
		$dataTinTuc=array(
			'tieu_de'=>'', 'tieu_de_url'=>'', 'tom_tat'=>'', 'chi_tiet'=>'', 'hinh'=>'', 'tac_gia'=>'', 'ngay_dang'=>date('Y-m-d'), 'ngay_gui'=>date('Y-m-d'), 'so_luot_xem'=>5000
			);
		if(isset($_POST['btnThem']))
		{
			$dataTinTuc=array(
				
				'tieu_de'=>$_POST['tieu_de'], 
				'tieu_de_url'=>$_POST['tieu_de_url'], 
				'tom_tat'=>$_POST['tom_tat'], 
				'chi_tiet'=>$_POST['chi_tiet'], 
				'hinh'=>'',  
				'tac_gia'=>$_POST['tac_gia'], 
				'ngay_dang'=>$_POST['ngay_dang'], 
				'ngay_gui'=>$_POST['ngay_gui'],
				'so_luot_xem'=>5000	
				);
			$kiemtra=$this->KiemTraDuLieu($dataTinTuc);
			

			if(empty($kiemtra))
			{
				//kiem tra hinh anh
				$hinh=$_FILES['hinh'];
				if($hinh['error']==0)
				{
					$arrType=array('image/jpeg','image/jpg','image/png');
					if(array_search($hinh['type'], $arrType)!==false)
					{
						if($hinh['size']<2000000)
						{
							$name=time().$hinh['name'];
							move_uploaded_file($hinh['tmp_name'], './public/images/'.$name);
							$dataTinTuc['hinh']=$name;
							$m_tin_tuc=new M_tin_tuc();
							$m_tin_tuc->ThemTinTuc($dataTinTuc);
							header('location:'.path.'quan-tri/tin-tuc/danh-sach-tin-tuc.html');
						}
						else
							$smarty->assign('err','Chỉ chọn hình <2MB');		
					}
					else
						$smarty->assign('err','Chỉ chọn file hình');
				
				}
				else
					$smarty->assign('err','Phải chọn hình ảnh');
			}
			else
				$smarty->assign('err',$kiemtra);

		}
		
		$smarty->assign('data',$dataTinTuc);
		$smarty->display('tin_tuc/v_them_tin_tuc.tpl');
	}

	public function KiemTraDuLieu($data)
	{
		$ketqua='';
		
		if(empty($data['tieu_de']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['tieu_de_url']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['tom_tat']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['chi_tiet']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
	}

	public function XoaTinTuc()
	{
		$maTT=$_GET['id'];
		$m_tin_tuc= new M_tin_tuc();
		$m_tin_tuc->XoaTinTuc($maTT);
		header('location:'.path.'quan-tri/tin-tuc/danh-sach-tin-tuc.html');
	}
	public function CapNhatTinTuc()
	{
		$maTT=$_GET['id'];
		$smarty=new Smarty_ung_dung();
		$m_tin_tuc= new M_tin_tuc();
		$data=$m_tin_tuc->getTinTuc($maTT);
		$dataTinTuc=array(
				'ma_tin_tuc'=>$maTT,
				'tieu_de'=>$data['tieu_de'], 
				'tieu_de_url'=>$data['tieu_de_url'], 
				'tom_tat'=>$data['tom_tat'], 
				'chi_tiet'=>$data['chi_tiet'], 
				'hinh'=>$data['hinh'],  
				'tac_gia'=>$data['tac_gia'], 
				'ngay_dang'=>$data['ngay_dang'], 
				'ngay_gui'=>$data['ngay_gui'],
				'so_luot_xem'=>$data['so_luot_xem']
			);
		if(isset($_POST['btnCapNhat']))
		{
			$dataTinTuc=array(
				'ma_tin_tuc'=>$maTT,
				'tieu_de'=>$_POST['tieu_de'], 
				'tieu_de_url'=>$_POST['tieu_de_url'], 
				'tom_tat'=>$_POST['tom_tat'], 
				'chi_tiet'=>$_POST['chi_tiet'], 
				'hinh'=>$data['hinh'],   
				'tac_gia'=>$_POST['tac_gia'], 
				'ngay_dang'=>$_POST['ngay_dang'], 
				'ngay_gui'=>$_POST['ngay_gui'],
				'so_luot_xem'=>$data['so_luot_xem']
				);
			$kiemtra=$this->KiemTraDuLieu($dataTinTuc);
			if(empty($kiemtra))
			{
				$m_tin_tuc=new M_tin_tuc();
				$m_tin_tuc->CapNhatTinTuc($dataTinTuc);
				header('location:'.path.'quan-tri/tin-tuc/danh-sach-tin-tuc.html');	
			}
			else
				$smarty->assign('err',$kiemtra);

		}
		$smarty->assign('data',$dataTinTuc);
		$smarty->display('tin_tuc/v_cap_nhat_tin_tuc.tpl');
	}

}
?>