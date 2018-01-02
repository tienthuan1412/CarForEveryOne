 <!-- jQuery 2.1.4 -->
 <script src="{$path}public/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script type="text/javascript">
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{$path}public/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{$path}public/admin/plugins/morris/morris.min.js" type="text/javascript"></script>
<!-- Sparkline -->
<script src="{$path}public/admin/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- jvectormap -->
<script src="{$path}public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="{$path}public/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="{$path}public/admin/plugins/knob/jquery.knob.js" type="text/javascript"></script>
<!-- daterangepicker -->
{if isset($dsTimnguoidung)} 
<script type="text/javascript">
	$(function(){
	  var currencies = [
	  {foreach $dsTimnguoidung as $itemdsTim}
	  { value: '{$itemdsTim['username']}' , data: '{$itemdsTim['iduser']}' },
	  {/foreach}               
	  ];
	  $(".form-control-user").autocomplete({
		lookup: currencies,
		onSelect: function (suggestion) {
			
			var iduser=suggestion.data;
			$.ajax({
				url: "{$path}timUser.php", 
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
</script>
{/if}
{if isset($dsTimSanPham)} 
<script type="text/javascript">
	$(function(){
	  var currencies = [
	  {foreach $dsTimSanPham as $itemdsTim}
	  { value: '{$itemdsTim['ten_xe']}' , data: '{$itemdsTim['ten_xe_url']}' },
	  {/foreach}               
	  ];
	  $(".form-control-product").autocomplete({
		lookup: currencies,
		onSelect: function (suggestion) {
			
			var ten_xe_url=suggestion.data;
			$.ajax({
				url: "{$path}timSP.php", 
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
</script>
{/if}
<script type="text/javascript">
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

       
       
   
    </script>
    <script type="text/javascript">
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

       
       
   
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
<script src="{$path}public/admin/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- datepicker -->
<script src="{$path}public/admin/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{$path}public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="{$path}public/admin/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="{$path}public/admin/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{$path}public/admin/dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{$path}public/admin/dist/js/pages/dashboard.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="{$path}public/admin/dist/js/demo.js" type="text/javascript"></script>
<script src="{$path}public/js_search/jquery.autocomplete.min.js" type="text/javascript"></script>
<script src="{$path}public/js_search/currency-autocomplete.js" type="text/javascript"></script>
</script>


<script>
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
				url: "{$path}quan-tri/nguoi-dung/trang-thai.html", //link trỏ đến controller
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
</script>
<script>
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
</script>

<script>
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
				url: "{$path}quan-tri/nguoi-dung/trang-thai.html", //link trỏ đến controller
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
</script>
<script>
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
				url: "{$path}quan-tri/san-pham/trang-thai.html", //link trỏ đến controller
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
</script>
<script>
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
				url: "{$path}quan-tri/hang-xe/trang-thai.html", //link trỏ đến controller
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
</script>

<script type="text/javascript">
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

                url: "{$path}thong-ke/so-don-dat-hang.html", 
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
   
    </script>


    <script type="text/javascript">
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

        </script>


    