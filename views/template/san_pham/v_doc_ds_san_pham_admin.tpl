{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<section class="content">
 <div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Danh sách xe hơi</h3>
        <div class="box-tools">
          <div class="input-group" style="width: 150px;">
            <input type="text" id="autocomplete" class="form-control-product form-control" placeholder="Search" />
            
          </div>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Tên Xe</th>
            <th>Đơn Giá</th>
            <th>Giá Khuyến Mãi</th>
            <th>Ngày Cập Nhật</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          {foreach $DSSanPham as $sp}
          <tr>
            <td>{$sp['idxe']}</td>
            <td>{$sp['ten_xe']}</td>
            <td>{$sp['don_gia']}</td>
            <td>{$sp['gia_khuyen_mai']}</td>
            <td>{$sp['ngay_cap_nhat']}</td>
            <td><button class="btn btn-active-product {if {$sp['status']}==1}btn-danger{/if}{if {$sp['status']}==0}btn-success{/if}" id="btn_{$sp['idxe']}_{$sp['status']}" data-id="{$sp['idxe']}">{if {$sp['status']}==1}Ẩn{/if}{if {$sp['status']}==0}Hiển Thị{/if}</button></td>
            <td>
              <div class="btn-group">
                <a class="btn btn-primary" href="{$path}quan-tri/san-pham/them-san-pham.html">Thêm<i class="icon_plus_alt2"></i></a>
                <a class="btn btn-success" href="{$path}quan-tri/san-pham/cap-nhat-san-pham/{$sp['idxe']}">Update<i class="icon_check_alt2"></i></a>
                
              </div>
            </td>
          </tr>
          {/foreach}
        </table>

      </div><!-- /.box-body -->

    </div><!-- /.box -->
    <div align="center">
      <tr>
        <td colspan="9" align="center">{$LinkPage}</td>
      </tr>
    </div>
  </div>

  {/block}