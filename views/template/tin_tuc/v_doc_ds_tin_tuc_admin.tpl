{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading"> Danh sách tin tức </header>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Mã tin tức</th>
            <th>Tiêu đề</th>
           
            <th>Ngày cập nhật</th>
            <th>Ngày Gửi</th>
            <th>&nbsp; </th>
          </tr>
        </thead>
        <tbody>
        
       
        {foreach $DSTinTuc as $itemTinTuc}
        <tr>
         
          <td>{$itemTinTuc['ma_tin_tuc']}</td>
          <td>{$itemTinTuc['tieu_de']}</td>
         
          <td>{$itemTinTuc['ngay_dang']}</td>
          <td>{$itemTinTuc['ngay_gui']}</td>

          <td><a href="{$path}quan-tri/tin-tuc/cap-nhat-tin-tuc/{$itemTinTuc['ma_tin_tuc']}" class="btn btn-info">Cập nhật</a> <a href="{$path}quan-tri/tin-tuc/xoa-tin-tuc/{$itemTinTuc['ma_tin_tuc']}" class="btn btn-warning">Xóa</a></td>
        </tr>
  
        {/foreach}
        <tr>
          <td colspan="9" align="center">{$LinkPage}</td>
        </tr>
          </tbody>
        
      </table>
    </section>
  </div>
</div>
{/block} 