<?php
/* Smarty version 3.1.30, created on 2017-12-22 18:38:41
  from "C:\wamp64\www\ShowRoom\views\template\layout\script.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3d5131482eb6_44660388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45362eb7f4ef16839a7bd3a2aac0efec7a84f668' => 
    array (
      0 => 'C:\\wamp64\\www\\ShowRoom\\views\\template\\layout\\script.tpl',
      1 => 1513926812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3d5131482eb6_44660388 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- JavaScript
================================================== -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/js/plugins.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/js/script.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>


<!-- revolution slider plugin -->

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/js/rs-plugin/js/jquery.themepunch.tools.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/js/rs-plugin/js/jquery.themepunch.revolution.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/notify/bootstrap-notify.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/js_search/jquery.autocomplete.min.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 type="text/javascript">

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

<?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
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
            url:"<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/them-san-pham.html",
            dataType: "text",
            type: "POST",
            data: { sanpham: masanpham, so_luong: sl },
            success: function(result)
            {
              if(result!='')
              {
                $.notify({
  message: "Add Products to Cart.... kakakakakakak :)))",
  url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/thong-tin-gio-hang.html"
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
            url:"<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
khach-hang/them-bo_suu_tap.html",
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
  <?php echo '</script'; ?>
>


    <?php if (isset($_smarty_tpl->tpl_vars['dsTimSanPham']->value)) {?> 
        <?php echo '<script'; ?>
 type="text/javascript">
            $(function(){
              var currencies = [
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dsTimSanPham']->value, 'itemdsTim');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdsTim']->value) {
?>
                    { value: '<?php echo $_smarty_tpl->tpl_vars['itemdsTim']->value['ten_xe'];?>
' , data: '<?php echo $_smarty_tpl->tpl_vars['itemdsTim']->value['ten_xe_url'];?>
' },
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
               
              ];
            $('#autocomplete').autocomplete({
                lookup: currencies,
                onSelect: function (suggestion) {
                
                    var tenUrl=suggestion.data;
                    $.ajax({
                                    url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
tim.php", 
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

  <?php echo '</script'; ?>
>
    <?php }?>
       

  <?php echo '<script'; ?>
>
  wow = new WOW(
   {
  
    } ) 
    .init();
  <?php echo '</script'; ?>
>

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
<?php }
}
