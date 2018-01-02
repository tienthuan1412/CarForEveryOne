<?php
/* Smarty version 3.1.30, created on 2018-01-02 05:51:03
  from "C:\wamp64\www\ShowRoom\views\template\khach_hang\v_dang_ky.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4b1dc7b54594_35118385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c53e49233be8718931470da3ca51bde74be421e' => 
    array (
      0 => 'C:\\wamp64\\www\\ShowRoom\\views\\template\\khach_hang\\v_dang_ky.tpl',
      1 => 1510124536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/masterSanPham.tpl' => 1,
  ),
),false)) {
function content_5a4b1dc7b54594_35118385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_264405a4b1dc7b4da33_90914277', 'content');
?>

<!--`ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai`, `ghi_chu`, `ten_dang_nhap`, `mat_khau`--><?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout/masterSanPham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_264405a4b1dc7b4da33_90914277 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="section-compact">
		<div class="container">
			<header class="heading-3 page-heading">
				<h4> Thông Tin Đăng Ký</h4>
			</header>
			
			<div class="form-main-container">
				<form class="checkout-form" method="post" action="#">
					<div class="row">
						<div class="col-sm-6 form-block">
							<div class="form-group row">
								<label class="col-md-3 label-md">Tên khách hàng*</label>
								<div class="col-md-7">
									<input type="text" placeholder="Tên khách hàng" class="form-control" id="ten_khach_hang" name="ten_khach_hang" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_khach_hang'];?>
">
									<span><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_khach_hang'];?>
</span>
								</div>
							</div>
							 
							<div class="form-group row">
								<label class="col-md-3 label-md">Email*</label>
								<div class="col-md-7">
									<input type="text" placeholder="Email" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
">
				    				<span><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['email'];?>
</span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 label-md">Địa Chỉ</label>
								<div class="col-md-7">
									<input type="text" placeholder="Địa Chỉ" class="form-control" id="dia_chi" name="dia_chi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dia_chi'];?>
">
				   					<span><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['dia_chi'];?>
</span>
								</div>
							</div>
													
							<div class="form-group0 row has-error">
								<label class="col-md-3 label-md">Phone Number</label>
								<div class="col-md-7">
									<input type="text" placeholder="Phone Number" class="form-control"id="dien_thoai" name="dien_thoai" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dien_thoai'];?>
">
				   					 <span><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['dien_thoai'];?>
</span>
									<small class="help-block"><i class="glyphicon glyphicon-alert"></i>Fill in your phone number.</small>
								</div>
							</div>
							
							
						</div>
						<div class="col-sm-6 form-block">


							<div class="form-group row">
								<label class="col-md-3 label-md">Tên đăng nhập*</label>
								<div class="col-md-7">
									<input type="text" placeholder="Tên đăng nhập" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap">
				    				<span><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_dang_nhap'];?>
</span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 label-md">Mật khẩu*</label>
								<div class="col-md-7">
									<input type="text" placeholder="Mật khẩu" class="form-control" ="mat_khau" name="mat_khau">
				    				<span><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['mat_khau'];?>
</span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 label-md">Ghi chú</label>
								<div class="col-md-7">
									<input type="text" placeholder="Ghi chú" class="form-control" id="ghi_chu" name="ghi_chu">
								</div>
							</div>
						</div>
					</div><!-- /row -->
					<div align="center">
					<input type="submit" class="btn btn-default btn-lg" name="dangky" value="Đăng Ký Ngay !">
					</div>
					<hr>
					

				</form>
			</div><!-- /form-main-container -->
		</div>
	</section>
<?php
}
}
/* {/block 'content'} */
}
