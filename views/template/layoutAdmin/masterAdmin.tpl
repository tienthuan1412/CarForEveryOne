<!DOCTYPE html>
<html lang="en">
  <!-- head -->
  {block name="head"}{include file="layoutAdmin/head.tpl"}{/block}
  <body onLoad="timeRefresh(6000);">
  <!-- container section start -->
  <section id="container" class="">
      <!-- header -->
      {block name="header"}{include file="layoutAdmin/header.tpl"}{/block}
      <!-- navigation -->
      {block name="navigation"}{include file="layoutAdmin/navigation.tpl"}{/block}
      <!--main content start-->
      <section id="main-content">
          <section class="main">
			<!-- content -->
        <div class="content-wrapper"  id="mainKhachHang">
            {block name="content"}{/block}
        </div>
            
            
          </section>
      </section>
      <!--main content end-->
      {block name='footer'}{include file="layoutAdmin/footer.tpl"}{/block}
  </section>
  
  <!-- container section end -->
    <!-- script -->
    {block name="script"}{include file="layoutAdmin/script.tpl"}{/block}
  </body>
</html>
