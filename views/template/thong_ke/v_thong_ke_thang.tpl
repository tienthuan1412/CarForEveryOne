{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<div class="col-md-6">
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Date picker</h3>
    </div>
    <form method="post">
    <div class="box-body">
      <!-- Date range -->
      <div class="form-group">
        <label>Date range:</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="text" class="form-control pull-right" id="reservation" name="reservation" />
        </div><!-- /.input group -->
      </div><!-- /.form group -->

      <!-- Date and time range -->
      

      <!-- Date and time range -->
      <div class="form-group">
        <label>Date range button:</label>
        <div class="input-group">
          <button class="btn btn-default pull-right" id="daterange-btn">
            <i class="fa fa-calendar"></i> Date range picker
            <i class="fa fa-caret-down"></i>
          </button>
        </div>
      </div><!-- /.form group -->
      <div class="form-group">
              <input class="btn btn-primary" type="submit" value="Thêm" name="btnxacnhan" />
            </div>
    </div><!-- /.box-body -->

  </form>
  </div><!-- /.box -->
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script type="text/javascript">

      $(function () {
        //Initialize Select2 Elements
        

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                  },
                  startDate: moment().subtract(29, 'days'),
                  endDate: moment()
                },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        
        //Red color scheme for iCheck
        

        //Colorpicker
       
      });
    </script>
  {/block}
