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

}
?>