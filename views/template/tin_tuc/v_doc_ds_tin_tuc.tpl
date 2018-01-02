{extends file="layout/masterSanPham.tpl"}
{block name="content"}
<div class="pageWrap">
  <div class="section-banner">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="index-2.html">Home</a></li>
        <li class="active">News</li>
      </ul>
    </div>
  </div><!-- /section-banner -->

  <section class="section-compact">
    <div class="container">
      <header class="heading-3 page-heading">
        <h4> Blog</h4>
      </header>
      
      <div class="row">

        <div class="col-md-9">
          
          
         {if isset($DSTinTuc)}
         {foreach $DSTinTuc as $tin}
         <div class="blog-box">
          <div class="post-multimedia">
            <div class="post-date">
              <span>20</span>apr
            </div>

            <div class="caro-control">
              <span class="caro-prev media-prev"><i class="flaticon-arrowhead7"></i></span>
              <span class="caro-next media-next"><i class="flaticon-arrow487"></i></span>        
            </div>

            <div class="carousel-single owl-carousel" data-trans="fadeUp" data-btn-next="media-next" data-btn-prev="media-prev">
              <div class="item">
                <figure class="image">
                  <img src="{$path}public/tin_tuc/{$tin['hinh']}" alt="image">
                </figure>
              </div>
              <div class="item">
                <figure class="image">
                  <img src="{$path}public/tin_tuc/{$tin['hinh']}" alt="image">
                </figure>
              </div>
              <div class="item">
                <figure class="image">
                  <img src="{$path}public/tin_tuc/{$tin['hinh']}" alt="image">
                </figure>
              </div>
              <div class="item">
                <figure class="image">
                  <img src="{$path}public/tin_tuc/{$tin['hinh']}" alt="image">
                </figure>
              </div>
            </div><!-- /carousel-single -->
          </div>
          <div class="blog-text">
            <h3><a href="{$path}tin-tuc/ct/{$tin['tieu_de_url']}-{$tin['ma_tin_tuc']}.html">{$tin['tieu_de']}</a></h3>
            <p>{$tin['tom_tat']}</p>
            <div class="blog-bottom-bar">
              <p class="posted">Posted By: <a href="#" class="text-primary">Darran Quote</a></p>
              <ul class="meta-list">
                <li><a href="#"><i class="flaticon-live2"></i>21 comments</a></li>
                <li><a href="#"><i class="flaticon-heart264"></i>12 likes</a></li>
                <li><a href="#"><i class="flaticon-tag31"></i>adventure, romance</a></li>
              </ul>
            </div><!-- /blog-bottom-bar -->
            <a href="{$path}tin-tuc/ct/{$tin['tieu_de_url']}-{$tin['ma_tin_tuc']}.html" class="btn btn-default">Read Article</a>
          </div>
        </div><!-- /blog-box -->
        {/foreach}
        {/if}
        

        

      </div>

      <div class="col-md-3">
        <div class="widget widget-search-site">
          <header class="widget-heading-4">
            <h4>Search Stories</h4>
          </header>
          <form action="#" method="post" class="search-widget-form">
            <input type="search" class="form-control" placeholder="">
            <input type="submit" value="go">
          </form>
        </div><!-- /widget-search-site -->
        
        <div class="widget widget-tabular">
          <ul class="widget-tab-head">
            <li><a data-toggle="tab" href="#widget-recent">Recent</a></li>
            <li class="active"><a data-toggle="tab" href="#widget-popular" aria-expanded="true">Popular</a></li>
            <li><a data-toggle="tab" href="#widget-new" aria-expanded="true">New</a></li>
          </ul>
          <div class="widget-tabular-content tab-content">
            <div id="widget-recent" class="tab-pane fade">
              <div class="media">
                <div class="media-left">
                  <a href="#"><img class="media-object" src="images/resource/img-32.jpg" alt="image"></a>
                </div>
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Lilac Perfumes for Spring</a></h5>
                  <p>Lorem ipsum dolor sit amet...</p>
                </div>
              </div><!-- /media -->
              <div class="media">
                <div class="media-left">
                  <a href="#"><img class="media-object" src="images/resource/img-33.jpg" alt="image"></a>
                </div>
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Throw open the windows</a></h5>
                  <p>Lorem ipsum dolor sit amet...</p>
                </div>
              </div><!-- /media -->
            </div><!-- /tab-pane -->

            <div id="widget-popular" class="tab-pane fade in active">
              <div class="media">
                <div class="media-left">
                  <a href="#"><img class="media-object" src="images/resource/img-31.jpg" alt="image"></a>
                </div>
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Martin Margiela Replica</a></h5>
                  <p>Lorem ipsum dolor sit amet...</p>
                </div>
              </div><!-- /media -->
              <div class="media">
                <div class="media-left">
                  <a href="#"><img class="media-object" src="images/resource/img-32.jpg" alt="image"></a>
                </div>
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Lilac Perfumes for Spring</a></h5>
                  <p>Lorem ipsum dolor sit amet...</p>
                </div>
              </div><!-- /media -->
              <div class="media">
                <div class="media-left">
                  <a href="#"><img class="media-object" src="images/resource/img-33.jpg" alt="image"></a>
                </div>
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Throw open the windows</a></h5>
                  <p>Lorem ipsum dolor sit amet...</p>
                </div>
              </div><!-- /media -->
            </div><!-- /tab-pane -->

            <div id="widget-new" class="tab-pane fade">
              <div class="media">
                <div class="media-left">
                  <a href="#"><img class="media-object" src="images/resource/img-33.jpg" alt="image"></a>
                </div>
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Throw open the windows</a></h5>
                  <p>Lorem ipsum dolor sit amet...</p>
                </div>
              </div><!-- /media -->
            </div><!-- /tab-pane -->
          </div>
        </div><!-- /widget-search-site -->

        <div class="widget widget_categories">
          <header class="widget-heading-4">
            <h4>All Categories</h4>
          </header>
          <ul>
            <li><a href="#">All</a> (590)</li>
            <li><a href="#">fragnances</a> (454)</li>
            <li><a href="#">floral</a> (90)</li>
            <li><a href="#">popular perfumes</a> (124)</li>
            <li><a href="#">about scents</a> (165)</li>
            <li><a href="#">wild fragnance</a> (124)</li>
            <li><a href="#">rose</a> (53)</li>
          </ul>
        </div><!-- /widget_categories -->

      </div>

    </div>

    <div class="action-bar">
      <div class="row">
        <div class="col-sm-6">
          <a href="#" class="go-back"><i class="flaticon-arrow83"></i>Older Posts</a>
        </div>
        <div class="col-sm-6">
          <!-- <a href="#" class="go-forward">Later Posts <i class="flaticon-arrow89"></i></a> -->
        </div>
      </div>
      
    </div>

  </div>
</section>

<div class="section-focus bg-dark">
  <div class="container">
    <div class="promo-box">
      <div class="row">
        <div class="col-sm-9">
          <p><strong>Rewards Club</strong> - Reward yourself Perfume Points everytime you spend</p>
        </div>
        <div class="col-sm-3">
          <a class="btn btn-default btn-lg">Start Shopping</a>
        </div>
      </div>
    </div>
  </div>
</div>



</div><!-- /pageWrap -->
{/block} 