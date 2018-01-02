<div class="tp-bar">
    <div class="container">
      <ul class="tp-links">
        <li>
          <span class="dropBox-btn">Account <i class="caret caret-cut"></i></span>
          <div class="dropBox">
            <div class="box-section">
              <h6>Returning Customer - Sign In</h6>
              <form class="accounts-form clearfix">
                <div class="form-left">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email Address" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required>
                  </div>
                </div>
                <input type="submit" class="btn btn-default text-uppercase" value="Sign In">
              </form><!-- /accounts-form -->
              <p class="help-block"><a href="#">Forgot your password?</a></p>
            </div><!-- /box-section -->
            <div class="box-section">
              <h6>New Customer - Register Benifits</h6>
              <ul class="list-1">
                <li>I want access to VIP sales</li>
                <li>I do not want to fill in the form repeatedly</li>
                <li>I want an order summary</li>
              </ul>
              <form class="accounts-form clearfix">
                <div class="form-left">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required>
                  </div>
                </div>
                <input type="submit" class="btn btn-default text-uppercase" value="Sign Up">
              </form><!-- /accounts-form -->
            </div><!-- /box-section -->
          </div><!-- /dropBox -->
        </li>
      </ul><!-- /tp-links -->
    </div>
  </div><!-- /tp-bar -->

<div class="main-bar">
    <div class="logo">
      <a href="{$path}"><img src="{$path}public/images/logo.png" alt="perfume"></a>
    </div><!-- /logo -->
    <div class="user-controls-bar">
      <ul class="user-controls">
        <li>
          <span class="site-search-btn dropBox-btn"><i class="flaticon-magnifier56"></i></span>
          <div class="dropBox">
            <div class="box-section">
              <form class="accounts-form clearfix">
                <div class="form-left">
                  <div class="form-group">
                    <input type="search" class="form-control" placeholder="Search Key">
                  </div>
                </div>
                <input type="submit" class="btn btn-default text-uppercase" value="Search">
              </form><!-- /accounts-form -->
            </div><!-- /box-section -->
          </div><!-- /dropBox -->

        </li>
        <li>
          <span class="cart-btn dropBox-btn">
           <a href="{$path}khach-hang/thong-tin-gio-hang.html"><i class="flaticon-shopping191"></i></a> 
            <span class="badge">0</span></span>
          <div class="dropBox">
            <div class="box-section">
              <ul class="cart-info-list">
                <li class="cart-item">
                  <div class="cart-item-bx">
                    <figure><img src="images/resource/img-1.jpg" alt="image"></figure>
                    <div class="text">
                      <h6><a href="#">Thierry Mugler Alien</a></h6>
                      <p>EDT 30ml</p>
                      <p>$45.99</p>
                      <p class="tot">$45.99</p>
                    </div>
                    <button type="button" class="close">&times;</button>
                  </div><!-- /cart-item-bx -->
                </li>
                <li class="cart-item">
                  <div class="cart-item-bx">
                    <figure><img src="images/resource/img-2.jpg" alt="image"></figure>
                    <div class="text">
                      <h6><a href="#">Thierry Mugler Alien</a></h6>
                      <p>3.4 OZ spray</p>
                      <p>$72.00</p>
                      <p class="tot">$72.00</p>
                    </div>
                    <button type="button" class="close">&times;</button>
                  </div><!-- /cart-item-bx -->
                </li>
              </ul><!--/ cart-info-list -->
              <a href="#" class="btn btn-dark btn-block dismiss-button">Continue Shopping</a>
              <p>Enjoy complimentary shipping on all orders over $75 and also complimentary samples and returns with every order.</p>
            </div><!-- /cart-info-box -->

            <!-- empty cart message -->
            <!-- <div class="box-section">
              <h6>Your Cart is empty</h6>
              <a href="#" class="btn btn-dark btn-block dismiss-button">Continue Shopping</a>
              <p>Enjoy complimentary shipping on all orders over $75 and also complimentary samples and returns with every order.</p>
            </div> --><!-- /cart-info-box -->
          </div><!-- /dropBox -->
        </li>
        <li class="toggle-menu">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </li>
      </ul><!-- /user-controls -->
    </div><!-- /user-controls -->

    <div class="main-nav-bar">
      <nav class="navbar-collapse collapse">
        <ul class="main-nav">
          <li><a href="{$path}">Home</a></li>
          <li><a href="{$path}about.html">About</a></li>
          <li>
            <a href="{$path}san-pham/danh-sach-san-pham">Brand</a>
            <ul>
               {if isset($dsLoaiSanPhamMenu)}
                  {foreach $dsLoaiSanPhamMenu as $itemLMenu}
                    <li><a href="{$path}san-pham/{$itemLMenu['ten_hang_url']}.html">{$itemLMenu['ten_hang']}</a></li>
                  {/foreach}
                 {/if}
            </ul>
          </li>
          <li><a href="beauty-expert.html">Accessories</a></li>
          <li><a href="{$path}dich-vu.html">Services</a></li>
          <li><a href="{$path}tin-tuc/danh-sach-tin-tuc.html">News</a></li>
          <li><a href="{$path}lien-he.html">Contact</a></li>
        </ul>
      </nav>
    </div><!-- /main-nav-bar -->
  </div><!-- /main-bar -->