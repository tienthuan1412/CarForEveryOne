{extends file="layout/masterSanPham.tpl"}
{block name='content'}
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
									<input type="text" placeholder="Tên khách hàng" class="form-control" id="ten_khach_hang" name="ten_khach_hang" value="{$data['ten_khach_hang']}">
									<span>{$dataErr['ten_khach_hang']}</span>
								</div>
							</div>
							 
							<div class="form-group row">
								<label class="col-md-3 label-md">Email*</label>
								<div class="col-md-7">
									<input type="text" placeholder="Email" class="form-control" id="email" name="email" value="{$data['email']}">
				    				<span>{$dataErr['email']}</span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 label-md">Địa Chỉ</label>
								<div class="col-md-7">
									<input type="text" placeholder="Địa Chỉ" class="form-control" id="dia_chi" name="dia_chi" value="{$data['dia_chi']}">
				   					<span>{$dataErr['dia_chi']}</span>
								</div>
							</div>
													
							<div class="form-group0 row has-error">
								<label class="col-md-3 label-md">Phone Number</label>
								<div class="col-md-7">
									<input type="text" placeholder="Phone Number" class="form-control"id="dien_thoai" name="dien_thoai" value="{$data['dien_thoai']}">
				   					 <span>{$dataErr['dien_thoai']}</span>
									<small class="help-block"><i class="glyphicon glyphicon-alert"></i>Fill in your phone number.</small>
								</div>
							</div>
							
							
						</div>
						<div class="col-sm-6 form-block">


							<div class="form-group row">
								<label class="col-md-3 label-md">Tên đăng nhập*</label>
								<div class="col-md-7">
									<input type="text" placeholder="Tên đăng nhập" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap">
				    				<span>{$dataErr['ten_dang_nhap']}</span>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 label-md">Mật khẩu*</label>
								<div class="col-md-7">
									<input type="text" placeholder="Mật khẩu" class="form-control" ="mat_khau" name="mat_khau">
				    				<span>{$dataErr['mat_khau']}</span>
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
{/block}
<!--`ten_khach_hang`, `phai`, `email`, `dia_chi`, `dien_thoai`, `ghi_chu`, `ten_dang_nhap`, `mat_khau`-->