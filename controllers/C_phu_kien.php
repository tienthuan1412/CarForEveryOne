<?php
include_once('controllers/Smarty_ung_dung.php');
include_once('./library/Pager.php');
class C_phu_kien
{
	public function index()
	{
		$smarty=new Smarty_ung_dung();
		$smarty->display('index.tpl');
	}
	public function DSPhuKienKhuyenMai()
	{
		$m_phu_kien=new M_phu_kien();
		$DSPhuKien=$m_phu_kien->getDSPhuKienGiamGia();
		
		$smarty=new Smarty_ung_dung();
		$smarty->assign('DSPhuKien',$DSPhuKien);
		$smarty->assign('LoaiCha', array('ten_loai'=>'Danh sách sản phẩm khuyến mãi'));
		$smarty->display('phu_kien/v_doc_ds_phu_kien_theo_loai.tpl');
	}

	public function DSHangXe()
	{
		$smarty=new Smarty_ung_dung();
		$m_phu_kien=new M_phu_kien();
		$DSHangXe=$m_phu_kien->getDSHangXe();
		$smarty->assign('DSHangXe',$DSHangXe);
		$smarty->display('phu_kien/v_doc_ds_hang_xe.tpl');
	}



	public function ChiTietPhuKien()
	{
		if(!isset($_GET['id']))
			header('location:'.path);
		$chuoi_url=$_GET['id'];
		$mang=explode('-',$chuoi_url);
		$id=$mang[count($mang)-1];
		$m_phu_kien = new M_phu_kien();
		$phu_kien=$m_phu_kien->getPhuKien($id);
		if(!$phu_kien)
			header('location:'.path);
		$smarty=new Smarty_ung_dung();

		$DSPhuKienCungLoai=$m_phu_kien->getDSPhuKienCungLoai($id,$phu_kien['idhang_xe']);
		//var_dump($DSPhuKienCungLoai);exit;
		if($DSPhuKienCungLoai)
			$smarty->assign('DSPhuKien',$DSPhuKienCungLoai);
		
		$smarty->assign('phu_kien',$phu_kien);
		$smarty->display('phu_kien/v_doc_ct_phu_kien.tpl');
	}
	public function DSPhuKienLoaiCha()
	{
		if(!isset($_GET['id']))
			header('location:'.path);
		$chuoi_url=$_GET['id'];
		
		$m_loai_phu_kien = new M_loai_phu_kien();
		$LoaiCha=$m_loai_phu_kien->getLoaiPhuKienCha($chuoi_url);

		if(!$LoaiCha)
			header('location:'.path);
		$smarty=new Smarty_ung_dung();
		
		$smarty->assign('LoaiCha',$LoaiCha);
		$m_phu_kien = new M_phu_kien();
		$dsPhuKien=$m_phu_kien->getDSXeCuaHang($LoaiCha['idhang_xe']);
		
		$smarty->assign('DSPhuKien',$dsPhuKien);
		$smarty->display('phu_kien/v_doc_ds_phu_kien_theo_loai.tpl');
	}

	public function DSPhuKien(){
		$m_phu_kien = new M_phu_kien();
		$pager = new Pager();
		$limit = 20;
		$start = $pager->findStart($limit);
		$count = $m_phu_kien->TongSoPhuKien();
		$numPage = $pager->findPages($count, $limit);
		$DSXe = $m_phu_kien->getDSPhuKienPhanTrang($start, $limit);
		//var_dump($DSXe);exit; 
		$LinkPage = $pager->pageList($_GET['page'], $numPage);
		$smarty = new Smarty_ung_dung();
		$smarty->assign('DSXe', $DSXe);
		$smarty->assign('LinkPage', $LinkPage);
		$smarty->display('phu_kien/v_doc_ds_phu_kien_theo_loai.tpl');		
	}
	public function DSPhuKiennAdmin()
	{
		$m_phu_kien = new M_phu_kien();
		$pager=new Pager();
		$limit=20;
		$start=$pager->findStart($limit);
		$count=$m_phu_kien->TongSoPhuKien();
		$numPage=$pager->findPages($count, $limit);
		$DSPhuKien=$m_phu_kien->getDSPhuKienPhanTrang($start,$limit);
		//var_dump($DSMonAn);
		$LinkPage=$pager->pageList_admin($_GET['page'], $numPage);
		//echo $LinkPage;
		$smarty=new Smarty_ung_dung();
		
		$smarty->assign('DSPhuKien',$DSPhuKien);
		$smarty->assign('LinkPage',$LinkPage);

		$smarty->display('phu_kien/v_doc_ds_phu_kien_admin.tpl');
	}
	public function ThemPhuKien()
	{
		$smarty=new Smarty_ung_dung();
		$dataPhuKien=array(
			'idhang_xe'=>'', 'ten_xe'=>'', 'ten_xe_url'=>'', 'noi_dung_tom_tat'=>'', 'noi_dung_chi_tiet'=>'', 'don_gia'=>'', 'gia_khuyen_mai'=>'', 'khuyen_mai'=>'', 'hinh'=>'', 'ngay_cap_nhat'=>'', 'dvt'=>'',    'video'=>'','status'=>0
		);
		if(isset($_POST['btnThem']))
		{
			$dataPhuKien=array(
				'idhang_xe'=>$_POST['idhang_xe'], 
				'ten_xe'=>$_POST['ten_xe'], 
				'ten_xe_url'=>$_POST['ten_xe_url'], 
				'noi_dung_tom_tat'=>$_POST['noi_dung_tom_tat'], 
				'noi_dung_chi_tiet'=>$_POST['noi_dung_chi_tiet'], 
				'don_gia'=>$_POST['don_gia'], 
				'gia_khuyen_mai'=>$_POST['gia_khuyen_mai'], 
				'khuyen_mai'=>$_POST['khuyen_mai'], 
				'hinh'=>$_POST['hinh'], 
				'ngay_cap_nhat'=>$_POST['ngay_cap_nhat'], 
				'dvt'=>$_POST['dvt'], 
				'video'=>'',
				'status'=>isset($_POST['status'])?1:0,
			);
			$kiemtra=$this->KiemTraDuLieu($dataPhuKien);
			if(empty($kiemtra))
			{
				//kiem tra hinh anh
				$hinh=$_FILES['hinh'];
				if($hinh['error']==0)
				{
					$arrType=array('image/jpeg','image/jpg','image/png');
					if(array_search($hinh['type'], $arrType)!==false)
					{
						if($hinh['size']<200000000000)
						{
							$name=time().$hinh['name'];
							move_uploaded_file($hinh['tmp_name'], './public/admin/images/'.$name);
							$dataPhuKien['hinh']=$name;
							$m_phu_kien=new M_phu_kien();
							$m_phu_kien->ThemPhuKien($dataPhuKien);
							header('location:'.path.'quan-tri/san-pham/danh-sach-san-pham.html');
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
		$m_loai_phu_kien=new M_loai_phu_kien();
		$smarty->assign('DSLoaiPhuKien',$m_loai_phu_kien->DSLoaiPhuKien());
		$smarty->assign('data',$dataPhuKien);
		$smarty->display('phu_kien/v_them_phu_kien.tpl');
	}


	public function ThemHangXe()
	{
		$smarty=new Smarty_ung_dung();
		$dataPhuKien=array(
			'ten_hang'=>'', 'ten_hang_url'=>'', 'mo_ta'=>'','hinh'=>'','status'=>0);
		if(isset($_POST['btnThemLoai']))
		{
			$dataPhuKien=array(

				'ten_hang'=>$_POST['ten_hang'], 
				'ten_hang_url'=>$_POST['ten_hang_url'], 
				'mo_ta'=>$_POST['mo_ta'],  
				'hinh'=>'',
				'status'=>isset($_POST['status'])?1:0
			);
			$kiemtra=$this->KiemTraDuLieuHangXe($dataPhuKien);
			if(empty($kiemtra))
			{
				//kiem tra hinh anh
				$hinh=$_FILES['hinh'];
				if($hinh['error']==0)
				{
					$arrType=array('image/jpeg','image/jpg','image/png');
					if(array_search($hinh['type'], $arrType)!==false)
					{
						if($hinh['size']<200000000000)
						{
							$name=time().$hinh['name'];
							move_uploaded_file($hinh['tmp_name'], './public/admin/images/'.$name);
							$dataPhuKien['hinh']=$name;
							$m_phu_kien=new M_phu_kien();
							$m_phu_kien->ThemHangXe($dataPhuKien);
							header('location:'.path.'quan-tri/san-pham/danh-sach-hang-xe.html');
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
		$m_loai_phu_kien=new M_loai_phu_kien();
		$smarty->assign('DSLoaiPhuKien',$m_loai_phu_kien->DSLoaiPhuKien());
		$smarty->assign('data',$dataPhuKien);
		$smarty->display('phu_kien/v_them_loai_xe.tpl');
	}


	public function KiemTraDuLieuHangXe($data)
	{
		$ketqua='';
		if(empty($data['ten_hang']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['ten_hang_url']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['mo_ta']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
	}
	public function CapNhatHangXe()
	{
		
		$idhang_xe=$_GET['id'];
		$smarty=new Smarty_ung_dung();
		$m_phu_kien= new M_phu_kien();
		$data=$m_phu_kien->getHangXe($idhang_xe);
		$dataND=array(
			'ten_hang'=>$data['ten_hang'], 'ten_hang_url'=>$data['ten_hang_url'], 'mo_ta'=>$data['mo_ta'], 'hinh'=>$data['hinh'], 'status'=>$data['status']
		);
		if(isset($_POST['btnCapNhat']))
		{
			$dataND=array(
				'idhang_xe'=>$data['idhang_xe'], 
				'ten_hang'=>$_POST['ten_hang'], 
				'ten_hang_url'=>$_POST['ten_hang_url'], 
				'mo_ta'=>$_POST['mo_ta'],
				'status'=>isset($_POST['status'])?1:0,		);
			$kiemtra=$this->KiemTraDuLieuHangXe($dataND);
			if(empty($kiemtra))
			{
				
				$m_phu_kien=new M_phu_kien();
				$m_phu_kien->CapNhatHangXe($dataND);
				header('location:'.path.'quan-tri/san-pham/danh-sach-hang-xe.html');	
			}
			else
				$smarty->assign('err',$kiemtra);

		}
		
		
		$smarty->assign('data',$dataND);
		$smarty->display('phu_kien/v_cap_nhat_hang_xe.tpl');
	}









	public function KiemTraDuLieu($data)
	{
		$ketqua='';
		if(empty($data['idhang_xe']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['ten_xe']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['ten_xe_url']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['noi_dung_tom_tat']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(empty($data['noi_dung_chi_tiet']))
		{
			$ketqua='Phải nhập dữ liệu cho các filed có (*)';
			return $ketqua;
		}
		if(!is_numeric($data['don_gia']))
		{
			$ketqua='Đơn giá phải nhập số';
			return $ketqua;
		}
		if(!is_numeric($data['gia_khuyen_mai']))
		{
			$ketqua='Đơn giá KM phải nhập số';
			return $ketqua;
		}
	}
	public function PhuKienBanChay()
	{
		$smarty=new Smarty_ung_dung();
		$m_phu_kien=new M_phu_kien();
		$DSPhuKienBanChay=$m_phu_kien->PhuKienBanChay();
		if($DSPhuKienBanChay)
		{
			$smarty->assign('DSPhuKienBanChay',$DSPhuKienBanChay);
		}
		$smarty->display('phu_kien/v_phu_kien_ban_chay.tpl');
	}
	public function XoaPhuKien()
	{
		$maSP=$_GET['id'];
		$m_phu_kien= new M_phu_kien();
		$m_phu_kien->XoaPhuKien($maSP);
		header('location:'.path.'quan-tri/san-pham/danh-sach-san-pham.html');
	}
	public function CapNhatPhuKien()
	{
		$idxe=$_GET['id'];
		$smarty=new Smarty_ung_dung();
		$m_phu_kien= new M_phu_kien();
		$data=$m_phu_kien->getPhuKien($idxe);
		$dataPhuKien=array(
			'idxe'=>$data['idxe'], 'idhang_xe'=>$data['idhang_xe'], 'ten_xe'=>$data['ten_xe'], 'ten_xe_url'=>$data['ten_xe_url'], 'noi_dung_tom_tat'=>$data['noi_dung_tom_tat'], 'noi_dung_chi_tiet'=>$data['noi_dung_chi_tiet'], 'don_gia'=>$data['don_gia'], 'gia_khuyen_mai'=>$data['gia_khuyen_mai'], 'khuyen_mai'=>$data['khuyen_mai'], 'hinh'=>$data['hinh'], 'ngay_cap_nhat'=>$data['ngay_cap_nhat'], 'dvt'=>$data['dvt'], 'video'=>$data['video'], 'status'=> $data['status']
		);
		if(isset($_POST['btnCapNhat']))
		{
			$dataPhuKien=array(
				'idxe'=>$data['idxe'], 
				'idhang_xe'=>$_POST['idhang_xe'], 
				'ten_xe'=>$_POST['ten_xe'], 
				'ten_xe_url'=>$_POST['ten_xe_url'], 
				'noi_dung_tom_tat'=>$_POST['noi_dung_tom_tat'], 
				'noi_dung_chi_tiet'=>$_POST['noi_dung_chi_tiet'], 
				'don_gia'=>$_POST['don_gia'], 
				'gia_khuyen_mai'=>$_POST['gia_khuyen_mai'], 
				'khuyen_mai'=>$_POST['khuyen_mai'], 
				'hinh'=>$data['idxe'], 
				'ngay_cap_nhat'=>$data['ngay_cap_nhat'], 
				'dvt'=>$_POST['dvt'],
				'video'=>$data['video'],
				'status'=>isset($_POST['status'])?1:0		);
			$kiemtra=$this->KiemTraDuLieu($dataPhuKien);
			if(empty($kiemtra))
			{
				$m_phu_kien=new M_phu_kien();
				$m_phu_kien->CapNhatPhuKien($dataPhuKien);
				header('location:'.path.'quan-tri/san-pham/danh-sach-san-pham.html');	
			}
			else
				$smarty->assign('err',$kiemtra);

		}
		$m_loai_phu_kien=new M_loai_phu_kien();
		$smarty->assign('DSLoaiPhuKien',$m_loai_phu_kien->DSLoaiPhuKien());
		$smarty->assign('data',$dataPhuKien);
		$smarty->display('phu_kien/v_cap_nhat_phu_kien.tpl');
	}
	public function TrangThai()
	{
		$idxe=$_POST['id'];
		$m_phu_kien= new M_phu_kien();
		$data=$m_phu_kien->getXe($idxe);
		if($data['status']==1)
			$status=0;
		else
			$status=1;
		
		$dataSP=array(
			'idxe'=>$data['idxe'], 'idhang_xe'=>$data['idhang_xe'], 'ten_xe'=>$data['ten_xe'], 'ten_xe_url'=>$data['ten_xe_url'], 'noi_dung_tom_tat'=>$data['noi_dung_tom_tat'], 'noi_dung_chi_tiet'=>$data['noi_dung_chi_tiet'], 'don_gia'=>$data['don_gia'], 'gia_khuyen_mai'=>$data['gia_khuyen_mai'], 'khuyen_mai'=>$data['khuyen_mai'], 'hinh'=>$data['hinh'], 'ngay_cap_nhat'=>$data['ngay_cap_nhat'], 'dvt'=>$data['dvt'], 'video'=>$data['video'], 'status'=> $status
		);
		$m_phu_kien->CapNhatPhuKien($dataSP);
		
		echo $status;

	}
	public function TrangThaiHangXe()
	{
		$idhang_xe=$_POST['id'];
		$m_phu_kien= new M_phu_kien();
		
		$data=$m_phu_kien->getHangXe($idhang_xe);
		if($data['status']==1)
			$status=0;
		else
			$status=1;
		
		$dataSP=array(
			'idhang_xe'=>$data['idhang_xe'], 'ten_hang'=>$data['ten_hang'], 'ten_hang_url'=>$data['ten_hang_url'], 'mo_ta'=>$data['mo_ta'], 'hinh'=>$data['hinh'], 'status'=>$status
		);
		$m_phu_kien->CapNhatHangXe($dataSP);
		
		echo $status;

	}

}
?>