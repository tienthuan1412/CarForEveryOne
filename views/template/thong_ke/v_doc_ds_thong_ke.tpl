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
						<th>Hình Thức thanh Toán</th>
						<th>Ghi chú</th>
						<th>Status</th>
					</tr>
					{foreach $DSDonDatHang as $hd}
					<tr>
						<td>{$hd['idhoa_don']}</td>
						<td>{$hd['idkhach_hang']}</td>
						<td>{$hd['ngay_dat']}</td>
						<td>{$hd['tong_tien']}</td>
						<td>{$hd['con_lai']}</td>
						<td><button class="btn btn-active-pay {if {$hd['hinh_thuc_thanh_toan']}==1}btn-danger{/if}{if {$hd['hinh_thuc_thanh_toan']}==0}btn-success{/if}" id="{$hd['idhoa_don']}" data-id="{$hd['idhoa_don']}">{if {$hd['hinh_thuc_thanh_toan']}==1}Tiền Mặt{/if}{if {$hd['hinh_thuc_thanh_toan']}==0}Chuyển Khoản{/if}</button></td>
						<td>{$hd['ghi_chu']}</td>
						<td>
							<button class="btn btn-active-order {if {$hd['status']}==0}btn-danger{/if}" id="btn_{$hd['idhoa_don']}_{$hd['status']}" data-path ="{$path}quan-tri/thong-ke/trang-thai.html" data-id="{$hd['idhoa_don']}" data-value="0">Tiếp Nhận</button>
							<button class="btn btn-active-order {if {$hd['status']}==1}btn-danger{/if}" id="btn_{$hd['idhoa_don']}_{$hd['status']}" data-path ="{$path}quan-tri/thong-ke/trang-thai.html" data-id="{$hd['idhoa_don']} " data-value="1">Xử Lý</button><br/>
							<button class="btn btn-active-order {if {$hd['status']}==2}btn-danger{/if}" id="btn_{$hd['idhoa_don']}_{$hd['status']}" data-path ="{$path}quan-tri/thong-ke/trang-thai.html" data-id="{$hd['idhoa_don']}"  data-value="2">Giao Hàng</button>
							<button class="btn btn-active-order {if {$hd['status']}==3}btn-danger{/if}" id="btn_{$hd['idhoa_don']}_{$hd['status']}" data-path ="{$path}quan-tri/thong-ke/trang-thai.html" data-id="{$hd['idhoa_don']}"  data-value="3">Thành Công</button>
						</td>
						<td>
							<div class="btn-group">
								<a class="btn btn-success" href="{$path}quan-tri/don-hang/cap-nhat-don-hang/{$hd['idhoa_don']}">Update<i class="icon_check_alt2"></i></a>
								
							</div>
						</td>
					</tr>
					{/foreach}
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
	{/block}