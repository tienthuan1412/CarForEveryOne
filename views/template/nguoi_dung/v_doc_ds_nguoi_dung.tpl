{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}

<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">
 <div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Danh sách người dùng</h3>
				<div class="box-tools">
					<div class="input-group" style="width: 150px;">
						<input type="text" id="autocomplete" class="form-control-user form-control" placeholder="Search" />
						
					</div>
				</div>
			</div><!-- /.box-header -->
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover">
					<tr>
						<th>ID</th>
						<th>User</th>
						<th>Date</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
					{foreach $DSNguoiDung as $nd}
					<tr>
						<td>{$nd['iduser']}</td>
						<td>{$nd['username']}</td>
						<td>{$nd['birthday']}</td>
						<td>{$nd['email']}</td>
						<td>{$nd['mobiphone']}</td>
						<td><button class="btn btn-active-user 
							{if {$nd['status']}==1}btn-success btn-danger{/if}
							{if {$nd['status']}==0}btn-success{/if}" 
							id="{$nd['iduser']}" 
							data-id="{$nd['iduser']}">
						{if {$nd['status']}==1}Khóa{/if}{if {$nd['status']}==0}Kích Hoạt{/if}</button></td>
						<td>
							<div class="btn-group">
								<a class="btn btn-primary" href="{$path}quan-tri/nguoi-dung/them-nguoi-dung.html">Thêm<i class="icon_plus_alt2"></i></a>
								<a class="btn btn-success" href="{$path}quan-tri/nguoi-dung/cap-nhat-nguoi-dung/{$nd['iduser']}">Update<i class="icon_check_alt2"></i></a>
								
							</div>
						</td>
					</tr>
					{/foreach}
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>

	{/block}