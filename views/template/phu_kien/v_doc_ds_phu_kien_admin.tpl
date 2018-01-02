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
            <th>Tên PK</th>
            <th>Đơn Giá</th>
            <th>Giá Khuyến Mãi</th>
            <th>Ngày Cập Nhật</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          {foreach $DSPhuKien as $pk}
          <tr>
            <td>{$pk['idxe']}</td>
            <td>{$pk['ten_xe']}</td>
            <td>{$pk['don_gia']}</td>
            <td>{$pk['gia_khuyen_mai']}</td>
            <td>{$pk['ngay_cap_nhat']}</td>
            <td><button class="btn btn-active-product {if {$pk['status']}==1}btn-danger{/if}{if {$pk['status']}==0}btn-success{/if}" id="btn_{$pk['idxe']}_{$pk['status']}" data-id="{$pk['idxe']}">{if {$pk['status']}==1}Ẩn{/if}{if {$pk['status']}==0}Hiển Thị{/if}</button></td>
            <td>
              <div class="btn-group">
                <a class="btn btn-primary" href="{$path}quan-tri/san-pham/them-san-pham.html">Thêm<i class="icon_plus_alt2"></i></a>
                <a class="btn btn-success" href="{$path}quan-tri/san-pham/cap-nhat-san-pham/{$pk['idxe']}">Update<i class="icon_check_alt2"></i></a>
                
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