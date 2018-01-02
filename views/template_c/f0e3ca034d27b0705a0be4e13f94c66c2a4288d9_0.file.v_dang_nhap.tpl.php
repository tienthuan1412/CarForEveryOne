<?php
/* Smarty version 3.1.30, created on 2018-01-02 05:52:04
  from "C:\wamp64\www\ShowRoom\views\template\khach_hang\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4b1e04c28883_41214939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0e3ca034d27b0705a0be4e13f94c66c2a4288d9' => 
    array (
      0 => 'C:\\wamp64\\www\\ShowRoom\\views\\template\\khach_hang\\v_dang_nhap.tpl',
      1 => 1510123444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/masterSanPham.tpl' => 1,
  ),
),false)) {
function content_5a4b1e04c28883_41214939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_265915a4b1e04c23910_79612661', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout/masterSanPham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_265915a4b1e04c23910_79612661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pageWrap">
	
	<section class="section-banner">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Trang Chủ</a></li>
				<li class="active">Đăng Nhập</li>
			</ul>
		</div>
	</section><!-- /section-banner -->

	<section class="section-compact">
		<div class="container">
			<header class="heading-3 page-heading">
				<h4> customer &amp; address</h4>
			</header>
			<?php if (isset($_smarty_tpl->tpl_vars['err']->value)) {?>
			<p style="color: #ff0000; text-align:center"> <?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</p>
		<?php }?>
			<div class="form-main-container">
				<form class="checkout-form" method="post" action="#">
					<div class="row" align="center">
						<div class="col-sm-12 form-block">
							<div class="form-group row">
								<label class="col-md-3 label-md">Tên đăng nhập *</label>
								<div class="col-md-7">
									<input type="text" placeholder="Tên đăng nhập" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" value="<?php echo $_smarty_tpl->tpl_vars['ten_dang_nhap']->value;?>
">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 label-md">Mật khẩu *</label>
								<div class="col-md-7">
									<input type="password" placeholder="Mật khẩu" class="form-control" id="mat_khau" name="mat_khau">
								</div>
							</div>
						</div>
						
					</div><!-- /row -->
					<div align="center">			  
					  <button type="submit" name="submit" class="btn btn-default  required="required">Đăng nhập</button>
					  <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/dang-ky.html" class="btn btn-default required="required">Đăng ký</a>
				  </div>
					<hr>

				</form>
			</div><!-- /form-main-container -->
		</div>
	</section>

	


	

	</div><!-- /pageWrap -->

<?php
}
}
/* {/block 'content'} */
}
