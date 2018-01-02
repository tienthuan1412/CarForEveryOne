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

}
?>