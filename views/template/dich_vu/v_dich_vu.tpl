{extends file="layout/masterSanPham.tpl"}
{block name='content'}
<div class="pageWrap">
  
  <section class="section-banner">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="index-2.html">Home</a></li>
        <li class="active">Services</li>
      </ul>
    </div>
  </section><!-- /section-banner -->

  <section class="section-compact">
    <div class="container">
      <div class="services-block">
        <header class="heading-3 page-heading">
          <span class="caro-prev services-prev"><i class="flaticon-arrowhead7"></i></span>
          <span class="caro-next services-next"><i class="flaticon-arrow487"></i></span>
          <h4>Our Services</h4>
        </header><!-- /heading-3 -->
        
        <div class="carousel-single owl-carousel" data-trans="backSlide" data-btn-next="services-next" data-btn-prev="caro-prev">
          <div class="item">
            <div class="service-box">
              <div class="row">
                <div class="col-sm-4">
                  <figure class="image image-gray image-zoom">
                    <img src="{$path}public/images/resource/img-14.jpg" alt="image">
                  </figure>
                </div>
                <div class="col-sm-8">
                  <div class="text text-center">
                    <h3>Free Click & <span class="text-primary">Collect</span></h3>
                    <p>Shop Online, Collect in store within 2 Hours* </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus ullamcorper metus, et tempus felis vehicula vitae. Nullam tortor dui, lacinia non sollicitudin vitae, faucibus in arcu. Integer sollicitudin suscipit felis, nec rutrum erat ultricies quis. Nam sed odio ex.</p>
                    <p>Phasellus mollis id erat sit amet feugiat. Proin ut porttitor dui. Aliquam nulla magna, convallis eu fringilla,  
    interdum fringilla turpis. Mauris faucibus odio, quis quam. Etiam rutrum rhoncus dictum.</p>
                    <div class="buttons">
                      <a href="#" class="btn btn-default btn-lg">Shop for Him</a>
                      <a href="#" class="btn btn-default btn-lg">Shop for Her</a>
                    </div>
                  </div><!-- /text -->
                </div>
              </div>
            </div><!-- /services-block -->
          </div><!-- /item -->
          <div class="item">
            <div class="service-box">
              <div class="row">
                <div class="col-sm-4">
                  <figure class="image image-gray image-zoom">
                    <img src="{$path}public/images/resource/img-14.jpg" alt="image">
                  </figure>
                </div>
                <div class="col-sm-8">
                  <div class="text text-center">
                    <h3>Free Click & <span class="text-primary">Collect</span></h3>
                    <p>Shop Online, Collect in store within 2 Hours* </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque cursus ullamcorper metus, et tempus felis vehicula vitae. Nullam tortor dui, lacinia non sollicitudin vitae, faucibus in arcu. Integer sollicitudin suscipit felis, nec rutrum erat ultricies quis. Nam sed odio ex.</p>
                    <p>Phasellus mollis id erat sit amet feugiat. Proin ut porttitor dui. Aliquam nulla magna, convallis eu fringilla,  
    interdum fringilla turpis. Mauris faucibus odio, quis quam. Etiam rutrum rhoncus dictum.</p>
                    <div class="buttons">
                      <a href="#" class="btn btn-default btn-lg">Shop for Him</a>
                      <a href="#" class="btn btn-default btn-lg">Shop for Her</a>
                    </div>
                  </div><!-- /text -->
                </div>
              </div>
            </div><!-- /services-block -->
          </div><!-- /item -->

      </div><!-- owl-carousel -->
      
    </div><!-- /about-block -->

  </div><!-- /container -->
</section>



</div><!-- /pageWrap -->
{/block}