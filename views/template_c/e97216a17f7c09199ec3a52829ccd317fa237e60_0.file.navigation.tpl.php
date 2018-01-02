<?php
/* Smarty version 3.1.30, created on 2018-01-02 05:30:06
  from "C:\wamp64\www\ShowRoom\views\template\layoutAdmin\navigation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4b18de3446b0_54149148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e97216a17f7c09199ec3a52829ccd317fa237e60' => 
    array (
      0 => 'C:\\wamp64\\www\\ShowRoom\\views\\template\\layoutAdmin\\navigation.tpl',
      1 => 1510941495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4b18de3446b0_54149148 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <aside class="main-sidebar">
 	<!-- sidebar: style can be found in sidebar.less -->
 	<section class="sidebar">
 		<!-- Sidebar user panel -->
 		<div class="user-panel">
 			<div class="pull-left image">
 				<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
 			</div>
 			<div class="pull-left info">
 				<p>Alexander Pierce</p>
 				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
 			</div>
 		</div>
 		<!-- search form -->
 		<form action="#" method="get" class="sidebar-form">
 			<div class="input-group">
 				<input type="text" name="q" class="form-control" placeholder="Search..." />
 				<span class="input-group-btn">
 					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
 				</span>
 			</div>
 		</form>
 		<!-- /.search form -->
 		<!-- sidebar menu: : style can be found in sidebar.less -->
 		<ul class="sidebar-menu">
 			<li class="header">MAIN NAVIGATION</li>
 			<li class="treeview">
 				<a href="#">
 					<i class="fa fa-pie-chart"></i> <span>Statistical</span> <i class="fa fa-angle-left pull-right"></i>
 				</a>
 				<ul class="treeview-menu">
 					<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/thong-ke/thong-ke-thang.html"><i class="fa fa-circle-o"></i>Monthly Statistics</a></li>
 					<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/thong-ke/thong-ke-khach.html"><i class="fa fa-circle-o"></i> Customer Statistics</a></li>
 					<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/thong-ke/thong-ke.html"><i class="fa fa-circle-o"></i> Oder Statistics</a></li>
 				</ul>
 			</li>
 			<li class="treeview">
 				<a href="#">
 					<i class="fa fa-automobile"></i>
 					<span>Product</span><i class="fa fa-angle-left pull-right"></i>
 				</a>
 				<ul class="treeview-menu">
 					<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham/danh-sach-san-pham.html"><i class="fa fa-circle-o"></i> List Products</a></li>
 					<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham/them-san-pham.html"><i class="fa fa-circle-o"></i> Add Product</a></li>
 					
 				</ul>
 			</li>
 			<li class="treeview">
 				<a href="#">
 					<i class="fa fa-pie-chart"></i>
 					<span>Brand Car</span>
 					<i class="fa fa-angle-left pull-right"></i>
 				</a>
 				<ul class="treeview-menu">
 					<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham/danh-sach-hang-xe.html"><i class="fa fa-circle-o"></i> List Brands</a></li>
 					<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham/them-hang-xe.html"><i class="fa fa-circle-o"></i> Add Brands</a></li>
 					
 				</ul>
 			</li>
 			<li class="treeview">
 				<a href="#">
 					<i class="fa fa-user-plus"></i>
 					<span>User</span>
 					<i class="fa fa-angle-left pull-right"></i>
 				</a>
 				<ul class="treeview-menu">
 					<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/danh-sach-nguoi-dung.html"><i class="fa fa-circle-o"></i> List User</a></li>
 					<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/them-nguoi-dung.html"><i class="fa fa-circle-o"></i> Add User</a></li>
 					
 				</ul>
 			</li>
 			<li class="treeview">
 				<a href="#">
 					<i class="fa fa-edit"></i> <span>News</span>
 					<i class="fa fa-angle-left pull-right"></i>
 				</a>
 				<ul class="treeview-menu">
 					<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/tin-tuc/danh-sach-tin-tuc.html"><i class="fa fa-circle-o"></i> List News</a></li>
 					<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/tin-tuc/them-tin-tuc.html"><i class="fa fa-circle-o"></i> Add News</a></li>
 					
 				</ul>
 			</li>
 			<li class="treeview">
 				<a href="#">
 					<i class="fa fa-gear"></i>
 					<span>Accessories</span><i class="fa fa-angle-left pull-right"></i>
 				</a>
 				<ul class="treeview-menu">
 					<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/phu-kien/danh-sach-phu-kien.html"><i class="fa fa-circle-o"></i> List Accessories</a></li>
 					<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/phu-kien/them-phu-kien.html"><i class="fa fa-circle-o"></i> Add Accessories</a></li>
 					
 				</ul>
 				
 			</ul>
 		</section>
 		<!-- /.sidebar -->
 	</aside><?php }
}
