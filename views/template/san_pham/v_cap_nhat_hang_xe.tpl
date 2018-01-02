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
                    <h3 class="box-title">Cập Nhật Hãng Xe</h3>
                    {if isset($err)}
                    <h3 align="center" style="color: #ff0000">{$err}</h3>
                    {/if}
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group has-success">
                            <label class="control-label" for="ten_hang"><i class="fa fa-check"></i> Tên hãng Xe</label>
                            <input type="text" class="form-control" id="ten_hang" name="ten_hang" value="{$data['ten_hang']}" placeholder="Enter ..." />
                        </div>
                        <div class="form-group has-warning">
                            <label class="control-label" for="ten_hang_url"><i class="fa fa-bell-o"></i> Tên hang Xe URL</label>
                            <input type="text" class="form-control" name="ten_hang_url" id="ten_hang_url" value="{$data['ten_hang_url']}" placeholder="Enter ..." />
                        </div>
                        <!-- text input -->
                        <div class="form-group">
                            <label>Mô tả</label>
                            <input type="text" class="form-control" id="mo_ta" name="mo_ta" value="{$data['mo_ta']}" placeholder="Enter ..." />
                        </div>
                            <div class="form-group">
                            <input type="file" class="form-control" id="hinh" name="hinh" placeholder="Enter ..." />
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"  name="status" {if {$data['status']}==1}checked="checked"{/if} />
                                Status
                            </label>
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