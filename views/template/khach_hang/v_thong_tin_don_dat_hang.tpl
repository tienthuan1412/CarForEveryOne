{extends file='layout/masterSanPham.tpl'}
{block name='content'}
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
   <div class="w3-container w3-light-grey w3-justify">
   <br><br><br><br>
      <h2 align="center">Thông Tin Đơn Đặt Hàng</h2>
    <div class="form-horizontal">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Mã Khách Hàng:</label>
        <div class="col-sm-2">
          <label  class="control-label">{$DonDatHang[0]['idkhach_hang']}</label>
        </div>
        <label for="inputEmail3" class="col-sm-4 control-label">Họ tên khách hàng:</label>
        <div class="col-sm-4">
          <label class="control-label">{$DonDatHang[0]['ten_khach_hang']}</label>
        </div>
      </div>
      
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
        <div class="col-sm-2">
          <label  class="control-label">{$DonDatHang[0]['email']}</label>
        </div>
        <label for="inputEmail3" class="col-sm-4 control-label">Điện thoại:</label>
        <div class="col-sm-4">
          <label class="control-label">{$DonDatHang[0]['dien_thoai']}</label>
        </div>
      </div>
      
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Địa chỉ:</label>
        <div class="col-sm-10">
          <label  class="control-label">{$DonDatHang[0]['dia_chi']}</label>
        </div>  
      </div>
      
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Số Hóa Đơn:</label>
        <div class="col-sm-2">
          <label  class="control-label">{$DonDatHang[0]['idhoa_don']}</label>
        </div>
        <label for="inputEmail3" class="col-sm-4 control-label">Ngày lập hóa đơn:</label>
        <div class="col-sm-4">
          <label class="control-label">{$DonDatHang[0]['ngay_dat']}</label>
        </div>
      </div>
      
    </div>
    <div class="comment-reply-form" style="padding-left: 50px; padding-right: 150px">
    <h5>Danh sách Sản Phẩm</h5>
    {if isset($DonDatHang)}
        <table class="table table-striped">
          <tr><td>STT</td><td>Mã Sản Phẩm</td><td>Tên Sản Phẩm</td><td align="right">Đơn giá</td><td align="right">Số lượng</td><td align="right">Thành tiền</td></tr>
          {$i=1}
          {$TongTienMon=0}
          {foreach $DonDatHang as $ttSP}
            <tr>
                <td>{$i}</td>
                <td>{$ttSP['idxe']}</td>
                <td>{$ttSP['ten']}</td>
                <td align="right">{number_format($ttSP['don_gia'])}</td>
                <td align="right">{number_format($ttSP['so_luong'])}</td>
                <td align="right">{number_format($ttSP['don_gia']*$ttSP['so_luong'])}</td>
            </tr>
            {$TongTienMon=$TongTienMon+($ttSP['don_gia']*$ttSP['so_luong'])}
            {$i=$i+1}
          {/foreach}
          <tr><td colspan="5">Tổng tiền Sản Phẩm:</td><td align="right">{number_format($TongTienMon)} VNĐ</td></tr>
        </table>
        <p align="center">Hàng sẽ được giao tận nhà sau khi hóa đơn được thanh toán</p><br>
        <h3 align="center"> Cảm ơn quý vị đã mua hàng tại TMT Wedding Studio !</h3>
        </div>
    {/if}
    </div>

{/block}