<?php
/* Smarty version 3.1.30, created on 2018-01-02 04:13:13
  from "C:\wamp64\www\ShowRoom\views\template\San_Pham\v_doc_ct_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4b06d998f7a8_19447953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5d93396a243e1f7ef7f8a43f2f2f0ad5b2ea26a' => 
    array (
      0 => 'C:\\wamp64\\www\\ShowRoom\\views\\template\\San_Pham\\v_doc_ct_san_pham.tpl',
      1 => 1514074020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/masterSanPham.tpl' => 1,
  ),
),false)) {
function content_5a4b06d998f7a8_19447953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_242405a4b06d9988667_52769599', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout/masterSanPham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_242405a4b06d9988667_52769599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pageWrap">
  <section class="section-banner">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
">Home</a></li>
        <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['ten_hang'];?>
</a></li>
        <li class="dropdown active breadcrumb-search">
          <a href="#" id="one" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['ten_xe'];?>
</a>

        </li>
        <li>
          <div class="bar-form">
            <form method="post" action="#">
              <input type="search" placeholder="Search" id="autocomplete">
              <input type="submit">
            </form>
          </div><!-- /bar-form -->
        </li>
      </ul>
    </div>
  </section><!-- /section-banner -->

  <section class="section-compact" id="mainSanPham">
    <div class="container">

      <div class="single-container">
        <div class="product-single">
          <div class="featured-box">
            <div class="row">
              <div class="col-sm-5">
                <figure class="image">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['hinh'];?>
" alt="image">
                  <figcaption>
                    <a href="#product-more" data-toggle="collapse">Thông tin chi tiết  <i class="flaticon-small63"></i></a>
                  </figcaption>
                </figure>
              </div>
              <div class="col-sm-7">
                <div class="text">
                  <p>Brand: <a href="#" class="text-primary"><?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['ten_hang'];?>
</a></p>
                  <h4><?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['ten_xe'];?>
</h4>
                  <p>
                    <a href="#info-1" data-toggle="collapse">Thông tin cơ bản  <i class="flaticon-small63"></i></a>
                  </p>
                  <div id="info-1" class="collapse in">
                    <p>Ngày cập nhật: <?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['ngay_cap_nhat'];?>
</p>
                    <p>Giá: <?php echo number_format($_smarty_tpl->tpl_vars['San_Pham']->value['don_gia']);?>
</p>
                    <p>Khuyến Mãi: <?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['khuyen_mai'];?>
</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['noi_dung_tom_tat'];?>
</p>
                  </div>
                  <button class="btn btn-default-buy" name="<?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['idxe'];?>
">Add to Cart</button> 
                </div>
              </div>
            </div>
          </div><!-- /featured-box -->
          <div id="product-more" class="product-more collapse in">
            <div class="cart-table table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <div class="prod-list-thumb media">
                        <figure class="media-left">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/images/editor-1.jpg" alt="image">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/images/slide-1.jpg" alt="image">
                        </figure>
                        <div class="media-body">
                          <h4 class="text-primary">
                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['ten_xe'];?>
</a>
                          </h4>
                          <p><?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['ngay_cap_nhat'];?>
</p>
                          <p><?php echo $_smarty_tpl->tpl_vars['San_Pham']->value['noi_dung_chi_tiet'];?>
</p>
                          
                        </div>
                      </div>
                    </td> 
                  </tr>
                </tbody>
              </table>
            </div><!-- /cart-table -->
          </div><!-- /product-more -->
        </div><!-- /product-single -->

        <section class="section pattern-1">
          <div class="container">
            <header class="heading-2">
              <h3>
                <em>Review</em>
                <span>Products</span>
                <em>posts</em>
              </h3>
            </header><!-- /heading-2 -->
            <div class="row">
              <?php $_smarty_tpl->_assignInScope('i', 0);
?>
              <?php if (isset($_smarty_tpl->tpl_vars['DSSanPham']->value)) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSSanPham']->value, 'sanpham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sanpham']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['i']->value < 3) {?> 
              <div class="col-sm-4">
                <div class="thumbnail thumbnail-blog">
                  <figure class="image-zoom">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['hinh'];?>
" alt="image" style="height: 220px">
                  </figure>
                  <div class="caption text-center">
                    <h4 class="text-uppercase"><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham/ct/<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['ten_xe_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['idxe'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['sanpham']->value['ten_xe'];?>
</a></h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['sanpham']->value['ngay_cap_nhat'];?>
<a href="blog-single.html" class="text-primary">[...]</a></p>
                  </div>
                </div><!-- /thumbail -->
              </div>
              <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
              <?php }?>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              <?php }?> 
            </div>
          </div>

          <div class="row cart-actions">
            <div class="col-sm-6">
              <a class="go-back" href="#"><i class="flaticon-arrow83"></i>Back to Shop</a>
            </div>
          </div>
        </section>
      </section>




    </div><!-- /pageWrap -->

    <?php
}
}
/* {/block "content"} */
}
