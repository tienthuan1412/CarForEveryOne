<?php
/* Smarty version 3.1.30, created on 2018-01-02 05:30:06
  from "C:\wamp64\www\ShowRoom\views\template\layoutAdmin\script.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4b18dea23568_11319547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26eadf74c675ba2ed8abc28f86ecf5d74de78805' => 
    array (
      0 => 'C:\\wamp64\\www\\ShowRoom\\views\\template\\layoutAdmin\\script.tpl',
      1 => 1510985005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4b18dea23568_11319547 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- jQuery 2.1.4 -->
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/plugins/jQuery/jQuery-2.1.4.min.js"><?php echo '</script'; ?>
>
 <!-- jQuery UI 1.11.4 -->
 <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <?php echo '<script'; ?>
 type="text/javascript">
  $.widget.bridge('uibutton', $.ui.button);
<?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.2 JS -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Morris.js charts -->
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/plugins/morris/morris.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Sparkline -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- jvectormap -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- jQuery Knob Chart -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/plugins/knob/jquery.knob.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- daterangepicker -->
<?php if (isset($_smarty_tpl->tpl_vars['dsTimnguoidung']->value)) {?> 
<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){
	  var currencies = [
	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dsTimnguoidung']->value, 'itemdsTim');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemdsTim']->value) {
?>
	  { value: '<?php echo $_smarty_tpl->tpl_vars['itemdsTim']->value['username'];?>
' , data: '<?php echo $_smarty_tpl->tpl_vars['itemdsTim']->value['iduser'];?>
' },
	  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
               
	  ];
	  $(".form-control-user").autocomplete({
		lookup: currencies,
		onSelect: function (suggestion) {
			
			var iduser=suggestion.data;
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
timUser.php", 
				dataType: "text",
				type: "POST",
				data: { iduser : iduser  },
				success: function(result)
				{                                       
					if(result!="")
						$('#mainKhachHang').html(result);
				}
			});
				//end ajax
			}
		});          
  });
	function veserver(iduser)
	{
		alert(iduser);
	}
<?php echo '</script'; ?>
>
<?php }
if (isset($_smarty_tpl->tpl_vars['dsTimSanPham']->value)) {?> 
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
	  $(".form-control-product").autocomplete({
		lookup: currencies,
		onSelect: function (suggestion) {
			
			var ten_xe_url=suggestion.data;
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
timSP.php", 
				dataType: "text",
				type: "POST",
				data: { ten_xe_url : ten_xe_url  },
				success: function(result)
				{                                       
					if(result!="")
						$('#mainKhachHang').html(result);
				}
			});
				//end ajax
			}
		});          
  });
	function veserver(ten_xe_url)
	{
		alert(ten_xe_url);
	}
<?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript">
    	$(document).ready(function(){

    		$("#ten_hang").blur(function(){

    			var ten_hang=$("#ten_hang").val();
    			if(ten_hang!="")
    			{
    				$("#ten_hang_url").val(bodau(ten_hang));
    			}
    		});
    	
    	function bodau(str){
            	str= str.toLowerCase();
            	str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
            	str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
            	str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
            	str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
            	str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
            	str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
            	str= str.replace(/đ/g,"d");
            	str= str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,"-");
            	str= str.replace(/-+-/g,"-");
            	str= str.replace(/^\-+|\-+$/g,"");
            	return str;
            	}
        });

       
       
   
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    	$(document).ready(function(){

    		$("#ten_xe").blur(function(){

    			var ten_xe=$("#ten_xe").val();
    			if(ten_xe!="")
    			{
    				$("#ten_xe_url").val(bodau(ten_xe));
    			}
    		});
    	
    	function bodau(str){
            	str= str.toLowerCase();
            	str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
            	str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
            	str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
            	str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
            	str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
            	str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
            	str= str.replace(/đ/g,"d");
            	str= str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,"-");
            	str= str.replace(/-+-/g,"-");
            	str= str.replace(/^\-+|\-+$/g,"");
            	return str;
            	}
        });

       
       
   
    <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/plugins/daterangepicker/daterangepicker.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- datepicker -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Bootstrap WYSIHTML5 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Slimscroll -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/plugins/fastclick/fastclick.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/dist/js/app.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/dist/js/pages/dashboard.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- AdminLTE for demo purposes -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/dist/js/demo.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/js_search/jquery.autocomplete.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/js_search/currency-autocomplete.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
	var user = {
		init: function () {
			user.registerEvents();
		},
		registerEvents: function () {
			$('.btn-active-user').off('click').on('click', function (e) {
				e.preventDefault();
				var btn = $(this);
			var id = btn.data('id'); //id lấy từ view ListUser
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/trang-thai.html", //link trỏ đến controller
				data: { id: id },
				dataType: "text",
				type:"POST",
				success: function (result) {
					console.log(result);
					if(result == 0)
					{                   
						btn.text('Kích hoạt');
						btn.removeClass('btn-danger');
						btn.addClass('btn-success');
					}
					else
					{                     
						btn.text('Khóa');
						btn.removeClass('btn-success');
						btn.addClass('btn-danger');
					}
				}
			});
		});
		}
	}
	user.init();
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var user = {
		init: function () {
			user.registerEvents();
		},
		registerEvents: function () {
			$('.btn-active-order').off('click').on('click', function (e) {
				e.preventDefault();
				var btn = $(this);
			var id = btn.data('id'); //id lấy từ view ListUser
			var status = btn.data('value');
			$.ajax({
				url: btn.data('path'), //link trỏ đến controller
				data: { id: id, status: status },
				dataType: "text",
				type:"POST",
				success: function (result) {
					console.log(result);
						btn.parent().find('.btn').removeClass('btn-danger');
						btn.addClass('btn-danger');
				}
			});
		});
		}
	}
	user.init();
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
	var user = {
		init: function () {
			user.registerEvents();
		},
		registerEvents: function () {
			$('.btn-active-user').off('click').on('click', function (e) {
				e.preventDefault();
				var btn = $(this);
			var id = btn.data('id'); //id lấy từ view ListUser
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/trang-thai.html", //link trỏ đến controller
				data: { id: id },
				dataType: "text",
				type:"POST",
				success: function (result) {
					console.log(result);
					if(result == 0)
					{                   
						btn.text('Kích hoạt');
						btn.removeClass('btn-danger');
						btn.addClass('btn-success');
					}
					else
					{                     
						btn.text('Khóa');
						btn.removeClass('btn-success');
						btn.addClass('btn-danger');
					}
				}
			});
		});
		}
	}
	user.init();
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var user = {
		init: function () {
			user.registerEvents();
		},
		registerEvents: function () {
			$('.btn-active-product').off('click').on('click', function (e) {
				e.preventDefault();
				var btn = $(this);
			var id = btn.data('id'); //id lấy từ view ListUser
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/san-pham/trang-thai.html", //link trỏ đến controller
				data: { id: id },
				dataType: "text",
				type:"POST",
				success: function (result) {
					console.log(result);
					if(result == 0)
					{                   
						btn.text('Hiện Thị');
						btn.removeClass('btn-danger');
						btn.addClass('btn-success');
					}
					else
					{                     
						btn.text('Ẩn');
						btn.removeClass('btn-success');
						btn.addClass('btn-danger');
					}
				}
			});
		});
		}
	}
	user.init();
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var user = {
		init: function () {
			user.registerEvents();
		},
		registerEvents: function () {
			$('.btn-active-brand').off('click').on('click', function (e) {
				e.preventDefault();
				var btn = $(this);
			var id = btn.data('id'); //id lấy từ view ListUser
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/hang-xe/trang-thai.html", //link trỏ đến controller
				data: { id: id },
				dataType: "text",
				type:"POST",
				success: function (result) {
					console.log(result);
					if(result == 0)
					{                   
						btn.text('Hiển Thị');
						btn.removeClass('btn-danger');
						btn.addClass('btn-success');
					}
					else
					{                     
						btn.text('Ẩn');
						btn.removeClass('btn-success');
						btn.addClass('btn-danger');
					}
				}
			});
		});
		}
	}
	user.init();
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    	$(document).ready(function(){

    		$("#ten_hang").blur(function(){

    			var ten_hang=$("#ten_hang").val();
    			if(ten_hang!="")
    			{
    				$("#ten_hang_url").val(bodau(ten_hang));
    			}
    		});
    	
    	function bodau(str){
            	str= str.toLowerCase();
            	str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
            	str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
            	str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
            	str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
            	str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
            	str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
            	str= str.replace(/đ/g,"d");
            	str= str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,"-");
            	str= str.replace(/-+-/g,"-");
            	str= str.replace(/^\-+|\-+$/g,"");
            	return str;
            	}
        });

       
       function timeRefresh(timeoutPeriod) 
        {
        setTimeout(function(){

            $.ajax({

                url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
thong-ke/so-don-dat-hang.html", 
                dataType: "text",
                type: "GET",
                success: function(result)
                {
                    //alert("Ve client");
                    $("#sodhMoi").html(result);
                    timeRefresh(timeoutPeriod);
                }

                }); 

        },timeoutPeriod);
    }
   
    <?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function(){

            $("#tieu_de").blur(function(){

                var tieu_de=$("#tieu_de").val();
                if(tieu_de!="")
                {
                    $("#tieu_de_url").val(bodau(tieu_de));
                }
            });
        
        function bodau(str){
                str= str.toLowerCase();
                str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
                str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
                str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
                str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
                str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
                str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
                str= str.replace(/đ/g,"d");
                str= str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,"-");
                str= str.replace(/-+-/g,"-");
                str= str.replace(/^\-+|\-+$/g,"");
                return str;
                }
        });

        <?php echo '</script'; ?>
>


    <?php }
}
