<?php
/* Smarty version 3.1.30, created on 2017-12-21 19:42:49
  from "C:\wamp64\www\ShowRoom\views\template\layout\headerSP.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3c0eb95ad722_90195982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '159ccef3e92dad2724c6cef4ec72e95e12352bdc' => 
    array (
      0 => 'C:\\wamp64\\www\\ShowRoom\\views\\template\\layout\\headerSP.tpl',
      1 => 1511202048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3c0eb95ad722_90195982 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tp-bar">
    <div class="container">
      <ul class="tp-links">
        <li>
          <span class="dropBox-btn">Account <i class="caret caret-cut"></i></span>
          <div class="dropBox">
            <div class="box-section">
              <h6>Returning Customer - Sign In</h6>
              <form class="accounts-form clearfix">
                <div class="form-left">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email Address" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required>
                  </div>
                </div>
                <input type="submit" class="btn btn-default text-uppercase" value="Sign In">
              </form><!-- /accounts-form -->
              <p class="help-block"><a href="#">Forgot your password?</a></p>
            </div><!-- /box-section -->
            <div class="box-section">
              <h6>New Customer - Register Benifits</h6>
              <ul class="list-1">
                <li>I want access to VIP sales</li>
                <li>I do not want to fill in the form repeatedly</li>
                <li>I want an order summary</li>
              </ul>
              <form class="accounts-form clearfix">
                <div class="form-left">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required>
                  </div>
                </div>
                <input type="submit" class="btn btn-default text-uppercase" value="Sign Up">
              </form><!-- /accounts-form -->
            </div><!-- /box-section -->
          </div><!-- /dropBox -->
        </li>
      </ul><!-- /tp-links -->
    </div>
  </div><!-- /tp-bar -->

<div class="main-bar">
    <div class="logo">
      <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/images/logo.png" alt="perfume"></a>
    </div><!-- /logo -->
    <div class="user-controls-bar">
      <ul class="user-controls">
        <li>
          <span class="site-search-btn dropBox-btn"><i class="flaticon-magnifier56"></i></span>
          <div class="dropBox">
            <div class="box-section">
              <form class="accounts-form clearfix">
                <div class="form-left">
                  <div class="form-group">
                    <input type="search" class="form-control" placeholder="Search Key">
                  </div>
                </div>
                <input type="submit" class="btn btn-default text-uppercase" value="Search">
              </form><!-- /accounts-form -->
            </div><!-- /box-section -->
          </div><!-- /dropBox -->

        </li>
        <li>
          <span class="cart-btn dropBox-btn">
           <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/thong-tin-gio-hang.html"><i class="flaticon-shopping191"></i></a> 
            <span class="badge">0</span></span>
          <div class="dropBox">
            <div class="box-section">
              <ul class="cart-info-list">
                <li class="cart-item">
                  <div class="cart-item-bx">
                    <figure><img src="images/resource/img-1.jpg" alt="image"></figure>
                    <div class="text">
                      <h6><a href="#">Thierry Mugler Alien</a></h6>
                      <p>EDT 30ml</p>
                      <p>$45.99</p>
                      <p class="tot">$45.99</p>
                    </div>
                    <button type="button" class="close">&times;</button>
                  </div><!-- /cart-item-bx -->
                </li>
                <li class="cart-item">
                  <div class="cart-item-bx">
                    <figure><img src="images/resource/img-2.jpg" alt="image"></figure>
                    <div class="text">
                      <h6><a href="#">Thierry Mugler Alien</a></h6>
                      <p>3.4 OZ spray</p>
                      <p>$72.00</p>
                      <p class="tot">$72.00</p>
                    </div>
                    <button type="button" class="close">&times;</button>
                  </div><!-- /cart-item-bx -->
                </li>
              </ul><!--/ cart-info-list -->
              <a href="#" class="btn btn-dark btn-block dismiss-button">Continue Shopping</a>
              <p>Enjoy complimentary shipping on all orders over $75 and also complimentary samples and returns with every order.</p>
            </div><!-- /cart-info-box -->

            <!-- empty cart message -->
            <!-- <div class="box-section">
              <h6>Your Cart is empty</h6>
              <a href="#" class="btn btn-dark btn-block dismiss-button">Continue Shopping</a>
              <p>Enjoy complimentary shipping on all orders over $75 and also complimentary samples and returns with every order.</p>
            </div> --><!-- /cart-info-box -->
          </div><!-- /dropBox -->
        </li>
        <li class="toggle-menu">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </li>
      </ul><!-- /user-controls -->
    </div><!-- /user-controls -->

    <div class="main-nav-bar">
      <nav class="navbar-collapse collapse">
        <ul class="main-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
">Home</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
about.html">About</a></li>
          <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham/danh-sach-san-pham">Brand</a>
            <ul>
               <?php if (isset($_smarty_tpl->tpl_vars['dsLoaiSanPhamMenu']->value)) {?>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dsLoaiSanPhamMenu']->value, 'itemLMenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemLMenu']->value) {
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham/<?php echo $_smarty_tpl->tpl_vars['itemLMenu']->value['ten_hang_url'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['itemLMenu']->value['ten_hang'];?>
</a></li>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                 <?php }?>
            </ul>
          </li>
          <li><a href="beauty-expert.html">Accessories</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
dich-vu.html">Services</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
tin-tuc/danh-sach-tin-tuc.html">News</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
lien-he.html">Contact</a></li>
        </ul>
      </nav>
    </div><!-- /main-nav-bar -->
  </div><!-- /main-bar --><?php }
}
