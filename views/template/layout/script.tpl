<!-- JavaScript
================================================== -->
<script src="{$path}public/js/plugins.js"></script>
<script src="{$path}public/js/script.js"></script>

<script src="{$path}public/js/ie10-viewport-bug-workaround.js"></script>


<!-- revolution slider plugin -->

<script type="text/javascript" src="{$path}public/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="{$path}public/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="{$path}public/notify/bootstrap-notify.js"></script>
<script src="{$path}public/js_search/jquery.autocomplete.min.js"></script>
 <script type="text/javascript">

  var revapi;

  jQuery(document).ready(function() {

       revapi = jQuery('.tp-banner').revolution({

        dottedOverlay:"none",
        delay:9000,
        startwidth:1170,
        startheight:700,
        hideThumbs:200,
        
        thumbWidth:100,
        thumbHeight:50,
        thumbAmount:5,
        
        navigationType:"none",
        navigationArrows:"solo",
        navigationStyle:"",
        
        touchenabled:"on",
        onHoverStop:"on",
        
        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
                    
                    
        keyboardNavigation:"on",
        
        navigationHAlign:"center",
        navigationVAlign:"bottom",
        navigationHOffset:0,
        navigationVOffset:20,

        soloArrowLeftHalign:"left",
        soloArrowLeftValign:"center",
        soloArrowLeftHOffset:20,
        soloArrowLeftVOffset:0,

        soloArrowRightHalign:"right",
        soloArrowRightValign:"center",
        soloArrowRightHOffset:20,
        soloArrowRightVOffset:0,
            
        shadow:0,
        fullWidth:"on",
        fullScreen:"off",

        spinner:"spinner0",
        
        stopLoop:"off",
        stopAfterLoops:-1,
        stopAtSlide:-1,

        shuffle:"off",
                            
        forceFullWidth:"off",           
        fullScreenAlignForce:"off",           
        minFullScreenHeight:"400",            
                    
        hideThumbsOnMobile:"off",
        hideNavDelayOnMobile:1500,            
        hideBulletsOnMobile:"off",
        hideArrowsOnMobile:"off",
        hideThumbsUnderResolution:0,
        
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        startWithSlide:0,
        fullScreenOffsetContainer: ""

      });

  }); //ready

</script>

    <script>
  $(document).ready(function()
  {
      
      $(".btn-default-buy").click(function()
      {

        var sl=$("#soluong").val();
        if(sl<=0)
        {
          alert("Vui lòng nhập số lượng > 0");
          return;
        }
        var masanpham=$(".btn-default-buy").attr("name");
          $.ajax(
          {
            url:"{$path}khach-hang/them-san-pham.html",
            dataType: "text",
            type: "POST",
            data: { sanpham: masanpham, so_luong: sl },
            success: function(result)
            {
              if(result!='')
              {
                $.notify({
  message: "Add Products to Cart.... kakakakakakak :)))",
  url: "{$path}khach-hang/thong-tin-gio-hang.html"
});
              }
              else
                  alert("Thêm vào giỏ hàng không thành công");
            }
          });
        });
      $(".btnMuaTD").click(function(){

        var ma_bo_suu_tap=$(this).attr("name");
        var sl=$("#soluong_"+ ma_bo_suu_tap).val();
        
        if(sl<=0)
        {
          alert("Vui lòng nhập số lượng > 0");
          return;
        }
        var mamon=$("#btnMua").attr("name");
          $.ajax({
            url:"{$path}khach-hang/them-bo_suu_tap.html",
            dataType: "text",
            type: "POST",
            data: { mbst: ma_bo_suu_Tap, so_luong: sl },
            success: function(result)
            {
              if(result!='')
              {
                $("#ttGH").html(result);
                alert("đã thêm vào giỏ hàng")
              }
              else
                  alert(result);
            }
          });
        });
    });
  </script>


    {if isset($dsTimSanPham)} 
        <script type="text/javascript">
            $(function(){
              var currencies = [
                {foreach $dsTimSanPham as $itemdsTim}
                    { value: '{$itemdsTim['ten_xe']}' , data: '{$itemdsTim['ten_xe_url']}' },
                {/foreach}               
              ];
            $('#autocomplete').autocomplete({
                lookup: currencies,
                onSelect: function (suggestion) {
                
                    var tenUrl=suggestion.data;
                    $.ajax({
                                    url: "{$path}tim.php", 
                                    dataType: "text",
                                    type: "POST",
                                    data: { ten_xe_url : tenUrl  },
                                    success: function(result)
                                    {                                       
                                        if(result!="")
                                          $('#mainSanPham').html(result);
                                    }
                            });
                //end ajax
                }
              });          
            });
            function veserver(tenUrl)
            {
                alert(tenUrl);
            }

  </script>
    {/if}
       

  <script>
  wow = new WOW(
   {
  
    } ) 
    .init();
  </script>

  <style type="text/css">
    .flip_container{
                 width:100%;
          height: 150px;
        margin: 0 auto;
    
      
      
                         }
.flip_container:hover  .flip
                        {      
          -webkit-transform: rotateY(180deg);
                           transform: rotateY(180deg);
            
                 }
.flip {
  -webkit-transition: 0.5s;
  transition: 0.5s;
          -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  position: relative;
  
        }
.flip_front, .flip_back {
                            -webkit-backface-visibility: hidden;
                                    backface-visibility: hidden;
                            position: absolute;
                          
                                    }
.flip_front {

           -webkit-transform: rotateY(0deg);
                   transform: rotateY(0deg);
                   }
.flip_back {
   
            -webkit-transform: rotateY(180deg);
                    transform: rotateY(180deg);
                  }
    </style>
  <div class="flip_container">
    <div class="flip">
<div class="flip_front">
    <img src="http://choonee.vn/wp-content/uploads/2017/12/logo.png" ></img>  
</div>
        <div class="flip_back">
    <img src="http://choonee.vn/wp-content/uploads/2017/12/logo_.png"></img>
        </div>
     </div>
  </div>
