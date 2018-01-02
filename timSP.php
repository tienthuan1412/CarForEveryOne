<?php
include_once('controllers/Smarty_ung_dung.php');
$ten_xe_url=$_POST['ten_xe_url'];
$m_san_pham=new M_san_pham();
$DSSP=$m_san_pham->TimKiemSanPhamURL($ten_xe_url);
if(count($DSSP)>0)
{
	echo'<section class="content-header">';
	echo'<h1>';
	echo'Dashboard';
	echo'<small>Control panel</small>';
	echo'</h1>';
	echo'<ol class="breadcrumb">';
	echo'<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>';
	echo'<li class="active">Dashboard</li>';
	echo'</ol>';
	echo'</section>';

		//<!-- Main content -->
	echo'<section class="content">';
	echo'<div class="row">';
	echo'<div class="col-xs-12">';
	echo'<div class="box">';
	echo'<div class="box-header">';
	echo'<h3 class="box-title">Danh sách sản phẩm</h3>';
	echo'<div class="box-tools">';
	echo'<div class="input-group" style="width: 150px;">';


	echo'</div>';
	echo'</div>';
	echo'</div><!-- /.box-header -->';
	echo'<div class="box-body table-responsive no-padding">';
	echo'<table class="table table-hover">';
	echo'<tr>';
	echo'<th>ID</th>';
	echo'<th>Tên sản phẩm</th>';
	echo'<th>Đơn giá</th>';
	echo'<th>Giá Khuyến Mãi</th>';
	echo'<th>Khuyến Mãi</th>';


	echo'</tr>';
	foreach ($DSSP as $nd)
	{
		echo'<tr>';
		echo'<td>'.$nd['idxe'].'</td>';
		echo'<td>'.$nd['ten_xe'].'</td>';
		echo'<td>'.$nd['don_gia'].'</td>';
		echo'<td>'.$nd['gia_khuyen_mai'].'</td>';
		echo'<td>'.$nd['khuyen_mai'].'</td>';



		echo'</div>';
		echo'</td>';
		echo'</tr>';
	}
	echo'</table>';
	echo'</div><!-- /.box-body -->';
	echo'</div><!-- /.box -->';
	echo'</div>';

}
else
	echo '';
?>