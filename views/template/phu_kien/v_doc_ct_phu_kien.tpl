{extends file="layout/masterSanPham.tpl"}
{block name="content"}
<div class="pageWrap">
  <section class="section-banner">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{$path}">Home</a></li>
        <li><a href="#">{$San_Pham['ten_hang']}</a></li>
        <li class="dropdown active breadcrumb-search">
          <a href="#" id="one" data-toggle="dropdown">{$San_Pham['ten_xe']}</a>

        </li>
        <li>
          <div class="bar-form">
            <form method="post" action="#">
              <input type="search" placeholder="Search within Men's Perfumes">
              <input type="submit">
            </form>
          </div><!-- /bar-form -->
        </li>
      </ul>
    </div>
  </section><!-- /section-banner -->

  <section class="section-compact">
    <div class="container">

      <div class="single-container">
        <div class="product-single">
          <div class="featured-box">
            <div class="row">
              <div class="col-sm-5">
                <figure class="image">
                  <img src="{$path}public/images/san_pham/{$San_Pham['hinh']}" alt="image">
                  <figcaption>
                    <a href="#product-more" data-toggle="collapse">Thông tin chi tiết  <i class="flaticon-small63"></i></a>
                  </figcaption>
                </figure>
              </div>
              <div class="col-sm-7">
                <div class="text">
                  <p>Brand: <a href="#" class="text-primary">{$San_Pham['ten_hang']}</a></p>
                  <h4>{$San_Pham['ten_xe']}</h4>
                  <p>
                    <a href="#info-1" data-toggle="collapse">Thông tin cơ bản  <i class="flaticon-small63"></i></a>
                  </p>
                  <div id="info-1" class="collapse in">
                    <p>Ngày cập nhật: {$San_Pham['ngay_cap_nhat']}</p>
                    <p>Giá: {number_format($San_Pham['don_gia'])}</p>
                    <p>Khuyến Mãi: {$San_Pham['khuyen_mai']}</p>
                    <p>{$San_Pham['noi_dung_tom_tat']}</p>
                  </div>
                  <button class="btn btn-default-buy" name="{$San_Pham['idxe']}">Add to Cart</button> 
                </div>
              </div>
            </div>
          </div><!-- /featured-box -->
          <div id="product-more" class="product-more collapse in">
            <div class="cart-table table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <div class="prod-list-thumb media">
                        <figure class="media-left">
                          <img src="{$path}public/images/editor-1.jpg" alt="image">
                          <img src="{$path}public/images/slide-1.jpg" alt="image">
                        </figure>
                        <div class="media-body">
                          <h4 class="text-primary">
                            <a href="#">{$San_Pham['ten_xe']}</a>
                          </h4>
                          <p>{$San_Pham['ngay_cap_nhat']}</p>
                          <p>{$San_Pham['noi_dung_chi_tiet']}</p>
                          
                        </div>
                      </div>
                    </td> 
                  </tr>
                </tbody>
              </table>
            </div><!-- /cart-table -->
          </div><!-- /product-more -->
        </div><!-- /product-single -->

        <section class="section pattern-1">
          <div class="container">
            <header class="heading-2">
              <h3>
                <em>Review</em>
                <span>Products</span>
                <em>posts</em>
              </h3>
            </header><!-- /heading-2 -->
            <div class="row">
              {$i=0}
              {if isset($DSSanPham)}
              {foreach $DSSanPham as $sanpham}
              {if $i<3} 
              <div class="col-sm-4">
                <div class="thumbnail thumbnail-blog">
                  <figure class="image-zoom">
                    <img src="{$path}public/images/san_pham/{$sanpham['hinh']}" alt="image" style="height: 220px">
                  </figure>
                  <div class="caption text-center">
                    <h4 class="text-uppercase"><a href="{$path}san-pham/ct/{$sanpham['ten_xe_url']}-{$sanpham['idxe']}.html">{$sanpham['ten_xe']}</a></h4>
                    <p>{$sanpham['ngay_cap_nhat']}<a href="blog-single.html" class="text-primary">[...]</a></p>
                  </div>
                </div><!-- /thumbail -->
              </div>
              {$i=$i+1}
              {/if}
              {/foreach}
              {/if} 
            </div>
          </div>

          <div class="row cart-actions">
            <div class="col-sm-6">
              <a class="go-back" href="#"><i class="flaticon-arrow83"></i>Back to Shop</a>
            </div>
          </div>
        </section>
      </section>




    </div><!-- /pageWrap -->

    {/block}