{extends file="layout/masterSanPham.tpl"}
{block name='content'}
<div class="pageWrap">
  
  
  

  <section class="section-banner">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Contact Us</li>
      </ul>
    </div>
  </section><!-- /section-banner -->

  <section class="section-compact">
    <div class="container">
      <div class="cart-block">
        <header class="heading-3 page-heading">
          <h4>questions? click link to read <span class="text-primary">FAQ</span></h4>
        </header>
        
        <div class="form-main-container">
          <div class="row">
            <div class="col-sm-5 col-lg-4">
              <header class="heading-5">
                <h4>01/</h4>
                <span>Get In <br>Touch</span>
              </header>
              <ul class="contact-list">
                <li><span class="iconic"><i class="flaticon-call36"></i></span>(012) 345-6789</li>
                <li><span class="iconic"><i class="flaticon-email15"></i></span><a href="#">info@perfumesupport.com</a></li>
                <li><span class="iconic"><i class="flaticon-twitter16"></i></span><a href="#">@followperfume</a></li>
                <li><span class="iconic"><i class="flaticon-facebook43"></i></span><a href="#">facebook.com/perfume</a></li>
              </ul>
            </div>
            <div class="col-sm-7 col-lg-8">
              <div class="form-section-box">
                <header class="heading-5 text-center">
                  <h4>02/</h4>
                  <span>Send us a <br>Message</span>
                </header>

                <form class="checkout-form" method="post" action="#">

                  <div class="form-group row">
                    <label class="col-md-2 label-md" >Name*</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control"  name="ten" value="{$data['ten']}" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 label-md" ">Email</label>
                    <div class="col-md-10">
                      <input type="email" class="form-control" id="email" name="email" value="{$data['email']}" placeholder="Email Address">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-md-2 label-md" >Subject</label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" id="tieu_de" name="tieu_de" value="{$data['tieu_de']}" placeholder="Name">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label class="col-md-2 label-md" >ND</label>
                    <div class="col-md-10">
                      <textarea class="form-control" id="noi_dung" name="noi_dung" value="{$data['noi_dung']}" placeholder="ND"></textarea>
                    </div>
                  </div>
                  <p class="text-center"><input type="submit" name="gui" class="btn btn-default btn-lg" value="Send"></p>

                </form>
              </div><!-- /form-section-box -->
            </div>
          </div>
        </div><!-- /form-main-container -->


      </div><!-- /cart-block -->
    </div>

  </section>

	<section class="section-focus bg-dark">
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
	</section>


	
</div><!-- /pageWrap -->
{/block}