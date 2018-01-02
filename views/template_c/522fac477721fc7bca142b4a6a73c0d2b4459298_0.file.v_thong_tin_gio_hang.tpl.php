<?php
/* Smarty version 3.1.30, created on 2017-12-21 19:43:03
  from "C:\wamp64\www\ShowRoom\views\template\khach_hang\v_thong_tin_gio_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3c0ec7518b15_29709124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '522fac477721fc7bca142b4a6a73c0d2b4459298' => 
    array (
      0 => 'C:\\wamp64\\www\\ShowRoom\\views\\template\\khach_hang\\v_thong_tin_gio_hang.tpl',
      1 => 1510131330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/masterSanPham.tpl' => 1,
  ),
),false)) {
function content_5a3c0ec7518b15_29709124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
include_once();

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126445a3c0ec75140a8_00807130', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout/masterSanPham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_126445a3c0ec75140a8_00807130 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pageWrap">
    <section class="section-banner">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">My Cart</li>
      </ul>
    </div>
  </section><!-- /section-banner -->

  <section class="section-compact">
    <div class="container">
      <div class="cart-block">
        <header class="heading-3 page-heading">
          <h4><a href="#" class="back-btn"><i class="flaticon-arrowhead7"></i>Back to Shop</a></h4>
        </header>
        
        <div class="steps-holder">
          <div class="step active">
            <span>1</span>
            <p>Pick Your Discount</p>
          </div><!-- /step -->
          <div class="step active">
            <span>2</span>
            <p>Shipping Address</p>
          </div><!-- /step -->
          <div class="step active">
            <span>3</span>
            <p>Shipping and Payment</p>
          </div><!-- /step -->
          <div class="step">
            <span>4</span>
            <p>Order Summery</p>
          </div><!-- /step -->
        </div><!-- /steps-holder -->
        <p class="text-right"><a href="#" class="btn btn-default btn-lg">Proceed to Checkout</a></p>
        
        <div class="cart-main-container">
          <div class="cart-table table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th>Giá</th>
                  <th>Số Lượng</th>
                  <th>Thành Tiền</th>
                  <th></th>
                </tr>
              </thead>
                <?php if (isset($_smarty_tpl->tpl_vars['mangSanPham']->value)) {?>
                  <?php $_smarty_tpl->_assignInScope('i', 1);
?>
    <?php $_smarty_tpl->_assignInScope('tongtien', 0);
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mangSanPham']->value, 'TT', false, 'masanpham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['masanpham']->value => $_smarty_tpl->tpl_vars['TT']->value) {
?>
              <tbody>
                <tr>
                  <td>
                    <div class="prod-list-thumb media">
                      <figure class="media-left"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/images/<?php echo $_smarty_tpl->tpl_vars['TT']->value['3'];?>
"" alt="image"></a></figure>
                      <div class="media-body">
                        <h4 class="text-primary"><a href="#"><?php echo $_smarty_tpl->tpl_vars['TT']->value['2'];?>
</a></h4>
                        <p>3 pcs in stock &amp; Ready to Ship!</p>
                      </div>
                    </div>
                  </td>
                  <td><div class="prod-price"><?php echo number_format($_smarty_tpl->tpl_vars['TT']->value['0']);?>
</div></td>
                  <td><div class="prod-qty"><input type="number" name="sl_<?php echo $_smarty_tpl->tpl_vars['masanpham']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['TT']->value['1'];?>
" style="width: 70px; text-align:center"></div></td>
                  <td><div class="prod-price"><strong><?php echo number_format($_smarty_tpl->tpl_vars['TT']->value['0']*$_smarty_tpl->tpl_vars['TT']->value['1']);?>
</strong></div></td>
                  <td><a href="#" class="prod-del"><i class="flaticon-close9"></i>Delete</a></td>
                </tr>
                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
                <?php $_smarty_tpl->_assignInScope('tongtien', $_smarty_tpl->tpl_vars['tongtien']->value+$_smarty_tpl->tpl_vars['TT']->value['0']*$_smarty_tpl->tpl_vars['TT']->value['1']);
?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <tr>
                  <td colspan="3">
                    <div class="prod-price-tot">Tổng Tiền</div>
                  </td>
                  <td colspan="2">
                    <div class="prod-price"><strong><?php echo number_format($_smarty_tpl->tpl_vars['tongtien']->value);?>
 VNĐ</strong></div>
                  </td>
                </tr>
              </tbody>
              
              <?php }?>
            </table>

          </div><!-- /cart-table -->
          <?php if (isset($_smarty_tpl->tpl_vars['mangSanPham']->value) || isset($_smarty_tpl->tpl_vars['mangBoSuuTap']->value)) {?>
    <p align="center">
      <input type="submit" name="CapNhat" value="Cập nhật" class="btn btn-info">
      <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/dat-hang.html" class="btn btn-success">Đăt hàng</a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/huy-gio-hang.html" class="btn btn-danger">Hủy giỏ hàng</a>
    </p>
  <?php }?>
  </form>
  </div>
  <?php if (!isset($_smarty_tpl->tpl_vars['mangSanPham']->value) && !isset($_smarty_tpl->tpl_vars['mangBoSuuTap']->value)) {?>
    <h2 align="center">Giỏ hàng rỗng</h2>
  <?php }?>
          <div class="row cart-actions">
            <div class="col-sm-6">
              <a class="go-back" href="#"><i class="flaticon-arrow83"></i>Back to Shop</a>
            </div>
            
          </div>
        </div><!-- /cart-main-container -->
     </div><!-- /cart-block -->
    </div>

  </section>
   
</div><!-- /pageWrap -->





<?php
}
}
/* {/block 'content'} */
}
