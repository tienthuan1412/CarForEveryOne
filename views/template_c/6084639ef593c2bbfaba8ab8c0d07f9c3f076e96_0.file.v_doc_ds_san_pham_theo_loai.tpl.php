<?php
/* Smarty version 3.1.30, created on 2017-12-21 19:42:49
  from "C:\wamp64\www\ShowRoom\views\template\san_pham\v_doc_ds_san_pham_theo_loai.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3c0eb92a6943_36762281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6084639ef593c2bbfaba8ab8c0d07f9c3f076e96' => 
    array (
      0 => 'C:\\wamp64\\www\\ShowRoom\\views\\template\\san_pham\\v_doc_ds_san_pham_theo_loai.tpl',
      1 => 1511330857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/masterSanPham.tpl' => 1,
  ),
),false)) {
function content_5a3c0eb92a6943_36762281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
\
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_219415a3c0eb9298fb0_70623192', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout/masterSanPham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_219415a3c0eb9298fb0_70623192 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pageWrap">
	<div class="section-banner">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
">Home</a></li>
				
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
	</div><!-- /section-banner -->

	<section class="section-compact">
		<div class="container">
			<header class="heading-3 page-heading">
				<h4> MEN'S PERFUMES <small>(4357)</small></h4>
			</header>
			<div class="row"  id="mainSanPham">

				<div class="col-md-12">
					
					<div class="filter-head">
						<strong>Sort By</strong>
						<ul class="filter-tabs">
							<li class="filter active" data-role="button" data-filter="popularity">Popularity</li>
							<li class="filter" data-role="button" data-filter="bestsellers">Bestsellers</li>
							<li class="filter" data-role="button" data-filter="pricefresh">Pricefresh</li>
							<li class="filter" data-role="button" data-filter="arrivals">Arrivals</li>
							<li class="filter" data-role="button" data-filter="rating">Customer Rating</li>
							<li class="layout-list" data-role="button"><i class="flaticon-menu10"></i></li>
							<li class="layout-grid active" data-role="button"><i class="flaticon-nine15"></i></li>
						</ul>
					</div><!-- /filter-head -->
					<ul class="filter-list">
						<?php if (isset($_smarty_tpl->tpl_vars['DSSanPham']->value)) {?>
    					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSSanPham']->value, 'sanpham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sanpham']->value) {
?>
						<li class="mix rating pricefresh">
							<div class="thumbnail thumbnail-product">
							  <figure class="image-zoom">
							    <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['hinh'];?>
" alt="image" style="width: 100%;height: 200px">
							  </figure>
								<div class="caption">
									<div class="text-wrap">
										<h5><?php echo $_smarty_tpl->tpl_vars['sanpham']->value['ten_xe'];?>
</h5>
										<div class="rating-star">
											<i class="flaticon-favourites7 selected"></i>
											<i class="flaticon-favourites7 selected"></i>
											<i class="flaticon-favourites7 selected"></i>
											<i class="flaticon-favourites7"></i>
											<i class="flaticon-favourites7"></i>
										</div><!-- /rating-star -->
										
										<div class="filter-list-disp">
											<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham/ct/<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['ten_xe_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['idxe'];?>
.html"" class="btn btn-default view-detail" class="btn btn-default view-detail">View Details</a>
										</div>
									</div><!-- /text-wrap -->
									<div class="list-wrap">
										<h5>Highlights:</h5>
										<ul class="list-6">
											<li>100% Genuine Product</li>
											<li>Brand: Guess</li>
											<li>Size: 30 ml - 200 ml</li>
											<li>Gender: Women</li>
											<li>Type: EDT</li>
											<li>Fragrance Notes: Orchid</li>
										</ul>
										<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham/ct/<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['ten_xe_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['idxe'];?>
.html"" class="btn btn-default view-detail">View Details</a>
									</div><!-- /list-wrap -->
								</div>
							</div><!-- /thumbail -->
						</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    					<?php }?> 
    					<?php if (isset($_smarty_tpl->tpl_vars['DSXe']->value)) {?>
    					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DSXe']->value, 'sanpham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sanpham']->value) {
?>
						<li class="mix rating pricefresh">
							<div class="thumbnail thumbnail-product">
							  <figure class="image-zoom">
							    <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['hinh'];?>
" alt="image" style="width: 100%;height: 200px">
							  </figure>
								<div class="caption">
									<div class="text-wrap">
										<h5><?php echo $_smarty_tpl->tpl_vars['sanpham']->value['ten_xe'];?>
</h5>
										<div class="rating-star">
											<i class="flaticon-favourites7 selected"></i>
											<i class="flaticon-favourites7 selected"></i>
											<i class="flaticon-favourites7 selected"></i>
											<i class="flaticon-favourites7"></i>
											<i class="flaticon-favourites7"></i>
										</div><!-- /rating-star -->
										<p class="prod-price text-primary">from $17.13</p>
										<div class="filter-list-disp">
											
											<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham/ct/<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['ten_xe_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['idxe'];?>
.html"" class="btn btn-default view-detail" class="btn btn-default view-detail">View Details</a>
										</div>
									</div><!-- /text-wrap -->
									<div class="list-wrap">
										<h5>Highlights:</h5>
										<ul class="list-6">
											<li>100% Genuine Product</li>
											<li>Brand: Guess</li>
											<li>Size: 30 ml - 200 ml</li>
											<li>Gender: Women</li>
											<li>Type: EDT</li>
											<li>Fragrance Notes: Orchid</li>
										</ul>
										<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
san-pham/ct/<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['ten_xe_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['sanpham']->value['idxe'];?>
.html"" class="btn btn-default view-detail">View Details</a>
									</div><!-- /list-wrap -->
								</div>
							</div><!-- /thumbail -->
						</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    					<?php }?> 
					</ul><!-- filter-list -->
					
					<div class="pagination-right">
						<ul class="pagination pagination-lg">
							<li class="prev disabled"><a href="#"><i class="flaticon-arrowhead7"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li><li class="prev"><a href="#"><i class="flaticon-arrow487"></i></a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li class="next"><a href="#"><i class="flaticon-arrow487"></i></a></li>
						</ul>
					</div><!-- /pagination-right -->

				</div>
			</div>
		</div>
	</section>

	<div class="section-focus bg-dark">
		<div class="container">
			<div class="promo-box">
				<div class="row">
					<div class="col-sm-9">
						<p><strong>Rewards Club</strong> - Reward yourself Perfume Points everytime you spend</p>
					</div>
					<div class="col-sm-3">
						<a class="btn btn-default btn-lg">Start Shopping</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<section class="section footer-widgets bg-lighter-grey">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-4">
							<div class="widget widget-links">
								<header class="widget-heading">
									<h4>Useful Links</h4>
								</header>
								<nav>
									<ul>
										<li><a href="#">home</a></li>
										<li><a href="#">pages</a></li>
										<li><a href="#">fragrances</a></li>
										<li><a href="#">skin &amp; body</a></li>
										<li><a href="#">blog</a></li>
										<li><a href="#">contact</a></li>
									</ul>
								</nav>
							</div><!-- /widget-links -->
						</div>
						<div class="col-sm-4">
							<div class="widget widget-links">
								<header class="widget-heading">
									<h4>Service</h4>
								</header>
								<nav class="widget widget-links">
									<ul>
										<li><a href="#">Order Guide</a></li>
										<li><a href="#">Right of withdrawal</a></li>
										<li><a href="#">Shipping &amp; Delivery</a></li>
										<li><a href="#">Payment</a></li>
										<li><a href="#">Return Policy</a></li>
										<li><a href="#">Terms &amp; Conditions</a></li>
									</ul>
								</nav>
							</div><!-- /widget-links -->
						</div>
						<div class="col-sm-4">
							<div class="widget widget-links">
								<header class="widget-heading">
									<h4>My Account</h4>
								</header>
								<nav class="widget widget-links">
									<ul>
										<li><a href="#">Cart ( 0 )</a></li>
										<li><a href="#">My Account</a></li>
										<li><a href="#">Register</a></li>
										<li><a href="#">Newsletter</a></li>
									</ul>
								</nav>
							</div><!-- /widget-links -->
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="widget widget-contact">
						<h4>keep in touch</h4>
						<p>Join our Newsletter for all the latest arrivals, information on product releases, competitions, news and special offers.</p>
						<form class="contact-widget-form" method="post" action="http://wow-themes.com/demo/html/perfume/index.html">
							<div class="form-group">
							  <input type="text" class="form-control" placeholder="Email Address" required>
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Subscribe">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section footer-widgets">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget widget-info">
						<header class="widget-heading-2">
							<h4><i class="flaticon-help"></i>Questions?</h4>
						</header>
						<p>We are here for you.</p>
						<nav>
							<ul>
								<li><i class="flaticon-phone72"></i>(012) 345-6789</li>
								<li><a href="#"><i class="flaticon-email15"></i>info@perfumesupport.com</a></li>
								<li><a href="#"><i class="flaticon-google125"></i>Would you like to speak live?</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="widget widget-info">
						<header class="widget-heading-2">
							<h4><i class="flaticon-shield90"></i>Security</h4>
						</header>
						<p>Art trade is a matter of trust.</p>
						<ul class="list-2">
							<li><a href="#">Authenticity verification</a></li>
							<li><a href="#">Buyers’ protection</a></li>
							<li><a href="#">Privacy protection</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="widget widget-info">
						<header class="widget-heading-2">
							<h4><i class="flaticon-shipping"></i>Shipping</h4>
						</header>
						<p>Free on orders over $75.</p>
						<ul class="list-2">
							<li><a href="#">Customized packaging</a></li>
							<li><a href="#">Careful handling</a></li>
							<li><a href="#">Insured shipping</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="widget widget-info">
						<header class="widget-heading-2">
							<h4><i class="flaticon-creditcard21"></i>Payments</h4>
						</header>
						<ul class="list-cards">
							<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/images/logo-visa.png" alt=""></a></li>
							<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/images/logo-americanexpress.png" alt=""></a></li>
							<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/images/logo-mastercard.png" alt=""></a></li>
							<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/images/logo-amazon.png" alt=""></a></li>
							<li><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/images/logo-paypal.png" alt=""></a></li>
						</ul>
					</div>					
				</div>
			</div>
		</div>
	</section>
	
	

</div><!-- /pageWrap -->
<?php
}
}
/* {/block "content"} */
}
