<?php
include_once('controllers/Smarty_ung_dung.php');
$iduser=$_POST['iduser'];
$m_nguoi_dung=new M_nguoi_dung();
$DSND=$m_nguoi_dung->TimKiemTenNguoiDung($iduser);
if(count($DSND)>0)
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
	echo'<h3 class="box-title">Danh sách người dùng</h3>';
	echo'<div class="box-tools">';
	echo'<div class="input-group" style="width: 150px;">';
	

	echo'</div>';
	echo'</div>';
	echo'</div><!-- /.box-header -->';
	echo'<div class="box-body table-responsive no-padding">';
	echo'<table class="table table-hover">';
	echo'<tr>';
	echo'<th>ID</th>';
	echo'<th>User</th>';
	echo'<th>Date</th>';
	echo'<th>Email</th>';
	echo'<th>Phone</th>';
	
	
	echo'</tr>';
	foreach ($DSND as $nd)
		{
			echo'<tr>';
			echo'<td>'.$nd['iduser'].'</td>';
			echo'<td>'.$nd['username'].'</td>';
			echo'<td>'.$nd['birthday'].'</td>';
			echo'<td>'.$nd['email'].'</td>';
			echo'<td>'.$nd['mobiphone'].'</td>';
			
			

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