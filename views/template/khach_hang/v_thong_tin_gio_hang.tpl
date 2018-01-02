include_once();
{extends file="layout/masterSanPham.tpl"}
{block name='content'}
<div class="pageWrap">
    <section class="section-banner">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">My Cart</li>
      </ul>
    </div>
  </section><!-- /section-banner -->

  <section class="section-compact">
    <div class="container">
      <div class="cart-block">
        <header class="heading-3 page-heading">
          <h4><a href="#" class="back-btn"><i class="flaticon-arrowhead7"></i>Back to Shop</a></h4>
        </header>
        
        <div class="steps-holder">
          <div class="step active">
            <span>1</span>
            <p>Pick Your Discount</p>
          </div><!-- /step -->
          <div class="step active">
            <span>2</span>
            <p>Shipping Address</p>
          </div><!-- /step -->
          <div class="step active">
            <span>3</span>
            <p>Shipping and Payment</p>
          </div><!-- /step -->
          <div class="step">
            <span>4</span>
            <p>Order Summery</p>
          </div><!-- /step -->
        </div><!-- /steps-holder -->
        <p class="text-right"><a href="#" class="btn btn-default btn-lg">Proceed to Checkout</a></p>
        
        <div class="cart-main-container">
          <div class="cart-table table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th>Giá</th>
                  <th>Số Lượng</th>
                  <th>Thành Tiền</th>
                  <th></th>
                </tr>
              </thead>
                {if isset($mangSanPham)}
                  {$i=1}
    {$tongtien=0}
                {foreach $mangSanPham as $masanpham =>$TT}
              <tbody>
                <tr>
                  <td>
                    <div class="prod-list-thumb media">
                      <figure class="media-left"><a href="#"><img src="{$path}public/images/{$TT['3']}"" alt="image"></a></figure>
                      <div class="media-body">
                        <h4 class="text-primary"><a href="#">{$TT['2']}</a></h4>
                        <p>3 pcs in stock &amp; Ready to Ship!</p>
                      </div>
                    </div>
                  </td>
                  <td><div class="prod-price">{number_format($TT['0'])}</div></td>
                  <td><div class="prod-qty"><input type="number" name="sl_{$masanpham}" value="{$TT['1']}" style="width: 70px; text-align:center"></div></td>
                  <td><div class="prod-price"><strong>{number_format($TT['0']*$TT['1'])}</strong></div></td>
                  <td><a href="#" class="prod-del"><i class="flaticon-close9"></i>Delete</a></td>
                </tr>
                {$i=$i+1}
                {$tongtien=$tongtien+$TT['0']*$TT['1']}
                {/foreach}
                <tr>
                  <td colspan="3">
                    <div class="prod-price-tot">Tổng Tiền</div>
                  </td>
                  <td colspan="2">
                    <div class="prod-price"><strong>{number_format($tongtien)} VNĐ</strong></div>
                  </td>
                </tr>
              </tbody>
              
              {/if}
            </table>

          </div><!-- /cart-table -->
          {if isset($mangSanPham) || isset($mangBoSuuTap)}
    <p align="center">
      <input type="submit" name="CapNhat" value="Cập nhật" class="btn btn-info">
      <a href="{$path}khach-hang/dat-hang.html" class="btn btn-success">Đăt hàng</a>
      <a href="{$path}khach-hang/huy-gio-hang.html" class="btn btn-danger">Hủy giỏ hàng</a>
    </p>
  {/if}
  </form>
  </div>
  {if ! isset($mangSanPham) && ! isset($mangBoSuuTap)}
    <h2 align="center">Giỏ hàng rỗng</h2>
  {/if}
          <div class="row cart-actions">
            <div class="col-sm-6">
              <a class="go-back" href="#"><i class="flaticon-arrow83"></i>Back to Shop</a>
            </div>
            
          </div>
        </div><!-- /cart-main-container -->
     </div><!-- /cart-block -->
    </div>

  </section>
   
</div><!-- /pageWrap -->





{/block}