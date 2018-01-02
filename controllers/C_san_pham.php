<?php
include_once('controllers/Smarty_ung_dung.php');
include_once('./library/Pager.php');
class C_san_pham
{
	public function index()
	{
		$smarty=new Smarty_ung_dung();
		$smarty->display('index.tpl');
	}
	public function DSSanPhamKhuyenMai()
	{
		$m_san_pham=new M_san_pham();
		$DSSanPham=$m_san_pham->getDSSanPhamGiamGia();
		
		$smarty=new Smarty_ung_dung();
		$smarty->assign('DSSanPham',$DSSanPham);
		$smarty->assign('LoaiCha', array('ten_loai'=>'Danh sách sản phẩm khuyến mãi'));
		$smarty->display('san_pham/v_doc_ds_san_pham_theo_loai.tpl');
	}

	public function DSHangXe()
	{
		$smarty=new Smarty_ung_dung();
		$m_san_pham=new M_san_pham();
		$DSHangXe=$m_san_pham->getDSHangXe();
		$smarty->assign('DSHangXe',$DSHangXe);
		$smarty->display('san_pham/v_doc_ds_hang_xe.tpl');
	}
	public function ChiTietSanPham()
	{
		if(!isset($_GET['id']))
			header('location:'.path);
		$chuoi_url=$_GET['id'];
		$mang=explode('-',$chuoi_url);
		$id=$mang[count($mang)-1];
		$m_san_pham = new M_san_pham();
		$San_Pham=$m_san_pham->getSanPham($id);
		if(!$San_Pham)
			header('location:'.path);
		$smarty=new Smarty_ung_dung();

		$DSSanPhamCungLoai=$m_san_pham->getDSSanPhamCungLoai($id,$San_Pham['idhang_xe']);
		//var_dump($DSSanPhamCungLoai);exit;
		if($DSSanPhamCungLoai)
			$smarty->assign('DSSanPham',$DSSanPhamCungLoai);
		
		$smarty->assign('San_Pham',$San_Pham);
		$smarty->display('San_Pham/v_doc_ct_san_pham.tpl');
	}
	public function DSSanPhamLoaiCha()
	{
		if(!isset($_GET['id']))
			header('location:'.path);
		$chuoi_url=$_GET['id'];
		
		$m_loai_san_pham = new M_loai_san_pham();
		$LoaiCha=$m_loai_san_pham->getLoaiSanPhamCha($chuoi_url);

		if(!$LoaiCha)
			header('location:'.path);
		$smarty=new Smarty_ung_dung();
		
		$smarty->assign('LoaiCha',$LoaiCha);
		$m_san_pham = new M_san_pham();
		$dsSanPham=$m_san_pham->getDSXeCuaHang($LoaiCha['idhang_xe']);
		
		$smarty->assign('DSSanPham',$dsSanPham);
		$smarty->display('san_pham/v_doc_ds_san_pham_theo_loai.tpl');
	}

	public function DSSanPham(){
		$m_san_pham = new M_san_pham();
		$pager = new Pager();
		$limit = 20;
		$start = $pager->findStart($limit);
		$count = $m_san_pham->TongSoSanPham();
		$numPage = $pager->findPages($count, $limit);
		$DSXe = $m_san_pham->getDSSanPhamPhanTrang($start, $limit);
		//var_dump($DSXe);exit; 
		$LinkPage = $pager->pageList($_GET['page'], $numPage);
		$smarty = new Smarty_ung_dung();
		$smarty->assign('DSXe', $DSXe);
		$smarty->assign('LinkPage', $LinkPage);
		$smarty->display('san_pham/v_doc_ds_san_pham_theo_loai.tpl');		
	}
	public function DSSanPhamnAdmin()
	{
		$m_san_pham = new M_san_pham();
		$pager=new Pager();
		$limit=8;
		$start=$pager->findStart($limit);
		$count=$m_san_pham->TongSoSanPham();
		$numPage=$pager->findPages($count, $limit);
		$DSSanPham=$m_san_pham->getDSSanPhamPhanTrang($start,$limit);
		//var_dump($DSMonAn);
		$LinkPage=$pager->pageList_admin($_GET['page'], $numPage);
		//echo $LinkPage;
		$smarty=new Smarty_ung_dung();
		
		$smarty->assign('DSSanPham',$DSSanPham);
		$smarty->assign('LinkPage',$LinkPage);

		$smarty->display('san_pham/v_doc_ds_san_pham_admin.tpl');
	}
	public function ThemSanPham()
	{
		$smarty=new Smarty_ung_dung();
		$dataSanPham=array(
			'idhang_xe'=>'', 'ten_xe'=>'', 'ten_xe_url'=>'', 'noi_dung_tom_tat'=>'', 'noi_dung_chi_tiet'=>'', 'don_gia'=>'', 'gia_khuyen_mai'=>'', 'khuyen_mai'=>'', 'hinh'=>'', 'ngay_cap_nhat'=>'', 'dvt'=>'',    'video'=>'','status'=>0
		);
		if(isset($_POST['btnThem']))
		{
			$dataSanPham=array(
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
			$kiemtra=$this->KiemTraDuLieu($dataSanPham);
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
							$dataSanPham['hinh']=$name;
							$m_san_pham=new M_san_pham();
							$m_san_pham->ThemSanPham($dataSanPham);
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
		$m_loai_san_pham=new M_loai_san_pham();
		$smarty->assign('DS_Loai_San_Pham',$m_loai_san_pham->DSLoaiSanPham());
		$smarty->assign('data3',$dataSanPham);
		$smarty->display('san_pham/v_them_san_pham.tpl');
	}


	public function ThemHangXe()
	{
		$smarty=new Smarty_ung_dung();
		$dataSanPham=array(
			'ten_hang'=>'', 'ten_hang_url'=>'', 'mo_ta'=>'','hinh'=>'','status'=>0);
		if(isset($_POST['btnThemLoai']))
		{
			$dataSanPham=array(

				'ten_hang'=>$_POST['ten_hang'], 
				'ten_hang_url'=>$_POST['ten_hang_url'], 
				'mo_ta'=>$_POST['mo_ta'],  
				'hinh'=>'',
				'status'=>isset($_POST['status'])?1:0
			);
			$kiemtra=$this->KiemTraDuLieuHangXe($dataSanPham);
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
							$dataSanPham['hinh']=$name;
							$m_san_pham=new M_san_pham();
							$m_san_pham->ThemHangXe($dataSanPham);
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
		$m_loai_san_pham=new M_loai_san_pham();
		$smarty->assign('DSLoaiSanPham',$m_loai_san_pham->DSLoaiSanPham());
		$smarty->assign('data',$dataSanPham);
		$smarty->display('san_pham/v_them_loai_xe.tpl');
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
		$m_san_pham= new M_san_pham();
		$data=$m_san_pham->getHangXe($idhang_xe);
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
				
				$m_san_pham=new M_san_pham();
				$m_san_pham->CapNhatHangXe($dataND);
				header('location:'.path.'quan-tri/san-pham/danh-sach-hang-xe.html');	
			}
			else
				$smarty->assign('err',$kiemtra);

		}
		
		
		$smarty->assign('data',$dataND);
		$smarty->display('san_pham/v_cap_nhat_hang_xe.tpl');
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
	public function SanPhamBanChay()
	{
		$smarty=new Smarty_ung_dung();
		$m_san_pham=new M_san_pham();
		$DSSanPhamBanChay=$m_san_pham->SanPhamBanChay();
		if($DSSanPhamBanChay)
		{
			$smarty->assign('DSSanPhamBanChay',$DSSanPhamBanChay);
		}
		$smarty->display('san_pham/v_san_pham_ban_chay.tpl');
	}
	public function XoaSanPham()
	{
		$maSP=$_GET['id'];
		$m_san_pham= new M_san_pham();
		$m_san_pham->XoaSanPham($maSP);
		header('location:'.path.'quan-tri/san-pham/danh-sach-san-pham.html');
	}
	public function CapNhatSanPham()
	{
		$idxe=$_GET['id'];
		$smarty=new Smarty_ung_dung();
		$m_san_pham= new M_san_pham();
		$data=$m_san_pham->getSanPham($idxe);
		$dataSanPham=array(
			'idxe'=>$data['idxe'], 'idhang_xe'=>$data['idhang_xe'], 'ten_xe'=>$data['ten_xe'], 'ten_xe_url'=>$data['ten_xe_url'], 'noi_dung_tom_tat'=>$data['noi_dung_tom_tat'], 'noi_dung_chi_tiet'=>$data['noi_dung_chi_tiet'], 'don_gia'=>$data['don_gia'], 'gia_khuyen_mai'=>$data['gia_khuyen_mai'], 'khuyen_mai'=>$data['khuyen_mai'], 'hinh'=>$data['hinh'], 'ngay_cap_nhat'=>$data['ngay_cap_nhat'], 'dvt'=>$data['dvt'], 'video'=>$data['video'], 'status'=> $data['status']
		);
		if(isset($_POST['btnCapNhat']))
		{
			$dataSanPham=array(
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
			$kiemtra=$this->KiemTraDuLieu($dataSanPham);
			if(empty($kiemtra))
			{
				$m_san_pham=new M_san_pham();
				$m_san_pham->CapNhatSanPham($dataSanPham);
				header('location:'.path.'quan-tri/san-pham/danh-sach-san-pham.html');	
			}
			else
				$smarty->assign('err',$kiemtra);

		}
		$m_loai_san_pham=new M_loai_san_pham();
		$smarty->assign('DSLoaiSanPham',$m_loai_san_pham->DSLoaiSanPham());
		$smarty->assign('data',$dataSanPham);
		$smarty->display('san_pham/v_cap_nhat_san_pham.tpl');
	}
	public function TrangThai()
	{
		$idxe=$_POST['id'];
		$m_san_pham= new M_san_pham();
		$data=$m_san_pham->getXe($idxe);
		if($data['status']==1)
			$status=0;
		else
			$status=1;
		
		$dataSP=array(
			'idxe'=>$data['idxe'], 'idhang_xe'=>$data['idhang_xe'], 'ten_xe'=>$data['ten_xe'], 'ten_xe_url'=>$data['ten_xe_url'], 'noi_dung_tom_tat'=>$data['noi_dung_tom_tat'], 'noi_dung_chi_tiet'=>$data['noi_dung_chi_tiet'], 'don_gia'=>$data['don_gia'], 'gia_khuyen_mai'=>$data['gia_khuyen_mai'], 'khuyen_mai'=>$data['khuyen_mai'], 'hinh'=>$data['hinh'], 'ngay_cap_nhat'=>$data['ngay_cap_nhat'], 'dvt'=>$data['dvt'], 'video'=>$data['video'], 'status'=> $status
		);
		$m_san_pham->CapNhatSanPham($dataSP);
		
		echo $status;

	}
	public function TrangThaiHangXe()
	{
		$idhang_xe=$_POST['id'];
		$m_san_pham= new M_san_pham();
		
		$data=$m_san_pham->getHangXe($idhang_xe);
		if($data['status']==1)
			$status=0;
		else
			$status=1;
		
		$dataSP=array(
			'idhang_xe'=>$data['idhang_xe'], 'ten_hang'=>$data['ten_hang'], 'ten_hang_url'=>$data['ten_hang_url'], 'mo_ta'=>$data['mo_ta'], 'hinh'=>$data['hinh'], 'status'=>$status
		);
		$m_san_pham->CapNhatHangXe($dataSP);
		
		echo $status;

	}

}
?>