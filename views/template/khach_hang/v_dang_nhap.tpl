{extends file="layout/masterSanPham.tpl"}
{block name='content'}
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
			{if isset($err)}
			<p style="color: #ff0000; text-align:center"> {$err}</p>
		{/if}
			<div class="form-main-container">
				<form class="checkout-form" method="post" action="#">
					<div class="row" align="center">
						<div class="col-sm-12 form-block">
							<div class="form-group row">
								<label class="col-md-3 label-md">Tên đăng nhập *</label>
								<div class="col-md-7">
									<input type="text" placeholder="Tên đăng nhập" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" value="{$ten_dang_nhap}">
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
					  <a href="{$path}khach-hang/dang-ky.html" class="btn btn-default required="required">Đăng ký</a>
				  </div>
					<hr>

				</form>
			</div><!-- /form-main-container -->
		</div>
	</section>

	


	

	</div><!-- /pageWrap -->

{/block}