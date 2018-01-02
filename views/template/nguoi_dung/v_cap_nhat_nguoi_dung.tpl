{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<section class="content-header">
	<h1>
		General Form Elements
		<small>Preview</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Forms</a></li>
		<li class="active">General Elements</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->

		<!-- right column -->
		<div class="col-md-6">
			<!-- Horizontal Form -->
			
			<!-- general form elements disabled -->
			<div class="box box-warning">
				<div class="box-header with-border">
					<h3 class="box-title">Thêm người dùng</h3>
					{if isset($err)}
					<h3 align="center" style="color: #ff0000">{$err}</h3>
					{/if}
				</div><!-- /.box-header -->
				<div class="box-body">
					<form role="form" method="post">
						<div class="form-group has-success">
							<label class="control-label" for="username"><i class="fa fa-check"></i> Tên đăng nhập</label>
							<input type="text" class="form-control" id="username" name="username" value="{$data['username']}" placeholder="Enter ..." />
						</div>
						<div class="form-group has-warning">
							<label class="control-label" for="password"><i class="fa fa-bell-o"></i> Mật khẩu</label>
							<input type="text" class="form-control" name="password" id="password" placeholder="Enter ..." />
						</div>
						<!-- text input -->
						<div class="form-group">
							<label>Họ & Tên</label>
							<input type="text" class="form-control" id="fullname" name="fullname" value="{$data['fullname']}" placeholder="Enter ..." />
						</div>
						<div class="form-group">
							<label>Ngày Sinh</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control" id="birthday" name="birthday" value="{$data['birthday']}" placeholder="yyyy/mm/dd" />
							</div><!-- /.input group -->
						</div><!-- /.form group -->
						<div class="checkbox">
							<label>
								<input type="checkbox" name="gender" {if {$data['gender']}==1}checked="checked"{/if} />
								Nam
							</label>
						</div>
						<div class="form-group">
							<label>Địa Chỉ</label>
							<input type="text" class="form-control" id="address" name="address" value="{$data['address']}" placeholder="Enter ..." />
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control" id="email" name="email" value="{$data['email']}" placeholder="Enter ..." />
						</div>
						<div class="form-group">
							<label>Số CMND</label>
							<input type="text" class="form-control" id="identitycard" name="identitycard" value="{$data['identitycard']}" placeholder="Enter ..." />
						</div>
						<div class="form-group">
							<label>Điện Thoại</label>
							<input type="text" class="form-control" id="mobiphone" name="mobiphone" value="{$data['mobiphone']}" placeholder="Enter ..." />
						</div>
						<label>Minimal</label>
						<select class="form-control select2" name="role">
							<option selected="selected" value="CEO">CEO</option>
							<option value="Nhân Viên">Nhân viên</option>
							<option value="Quản Lý">Quản Lý</option>
						</select>
						<div class="form-group">
							<label>Hình</label>
							<input type="file" class="form-control" id="hinh" name="hinh" placeholder="Enter ..." />
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"  name="status" {if {$data['status']}==1}checked="checked"{/if} />
								Status
							</label>
						</div>
						<div class="form-group">
							
							<input class="btn btn-primary" type="submit" value="Cập nhật" name="btnCapNhat" />
							
						</div>
					</div>
					<!-- input states -->
					<!-- checkbox -->
					

				</form>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!--/.col (right) -->
</div>   <!-- /.row -->
</section><!-- /.content -->
{/block}
