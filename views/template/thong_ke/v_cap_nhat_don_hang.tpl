{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<script src="{$path}public/ckeditor/ckeditor.js"></script>
<section class="content-header">
    <h1>
        General Form Elements
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->

        <!-- right column -->
        <div class="col-md-6">
            <!-- Horizontal Form -->
            
            <!-- general form elements disabled -->
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Cập Nhật Đơn Hàng</h3>
                    {if isset($err)}
                    <h3 align="center" style="color: #ff0000">{$err}</h3>
                    {/if}
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form role="form" method="post" enctype="multipart/form-data">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Tiền Đặt Cọc</label>
                            <input type="text" class="form-control" id="tien_dat_coc" name="tien_dat_coc" value="{$data['tien_dat_coc']}" placeholder="Enter ..." />
                        </div>
                        <div class="form-group">
                            <label>Tiền Còn Nợ</label>
                            <input type="text" class="form-control" id="con_lai" name="con_lai" value="{$data['con_lai']}" placeholder="Enter ..." />
                        </div>
                        <div class="form-group">
                            <label>Ghi Chú</label>
                            <input type="text" class="form-control" id="ghi_chu" name="ghi_chu" value="{$data['ghi_chu']}" placeholder="Enter ..." />
                        </div>
                        
                    
                    </br>
                        <div class="form-group">
                            
                            <input class="btn btn-primary" type="submit" value="Cập Nhật" name="btnCapNhat" />
                            
                        </div>
                    </div>
                    <!-- input states -->
                    <!-- checkbox -->
                    

                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
</div>   <!-- /.row -->
</section><!-- /.content -->
{/block}