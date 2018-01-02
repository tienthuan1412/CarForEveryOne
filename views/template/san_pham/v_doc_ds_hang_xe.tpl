{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<section class="content">
 <div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Danh sách hãng xe hơi</h3>
        <div class="box-tools">
          <div class="input-group" style="width: 150px;">
            <input type="text" id="autocomplete" class="form-control" placeholder="Search" />
            
          </div>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Tên Hãng Xe</th>
            <th>Mô tả</th>
            <th>Action</th>
          </tr>
          {foreach $DSHangXe as $sp}
          <tr>
            <td>{$sp['idhang_xe']}</td>
            <td>{$sp['ten_hang']}</td>
            <td>{$sp['mo_ta']}</td>
            <td><button class="btn btn-active-brand {if {$sp['status']}==1}btn-danger{/if}{if {$sp['status']}==0}btn-success{/if} id="{$sp['idhang_xe']}" data-id="{$sp['idhang_xe']}">{if {$sp['status']}==1}Ẩn{/if}{if {$sp['status']}==0}Hiển Thị{/if}</button></td>
            <td>
              <div class="btn-group">
                <a class="btn btn-primary" href="{$path}quan-tri/san-pham/them-hang-xe.html">Thêm<i class="icon_plus_alt2"></i></a>
                <a class="btn btn-success" href="{$path}quan-tri/san-pham/cap-nhat-hang-xe/{$sp['idhang_xe']}">Update<i class="icon_check_alt2"></i></a>
                
              </div>
            </td>
          </tr>
          {/foreach}
        </table>

      </div><!-- /.box-body -->

    </div><!-- /.box -->
  
  </div>

  {/block}