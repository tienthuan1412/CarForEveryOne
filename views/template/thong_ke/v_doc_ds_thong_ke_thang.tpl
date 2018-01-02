{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<section class="content">
 <div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Danh sách hóa đơn</h3>
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
						<th>Mã khách hàng</th>
						<th>Ngày đặt</th>
						<th>Tổng tiền</th>
						<th>Tiền còn nợ</th>
						<th>Ghi chú</th>
						
					</tr>
					{foreach $DSDonDatHang as $hd}
					<tr>
						<td>{$hd['idhoa_don']}</td>
						<td>{$hd['idkhach_hang']}</td>
						<td>{$hd['ngay_dat']}</td>
						<td>{$hd['tong_tien']}</td>
						<td>{$hd['con_lai']}</td>
						<td>{$hd['ghi_chu']}</td>
						
					</tr>
					{/foreach}
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
	{/block}