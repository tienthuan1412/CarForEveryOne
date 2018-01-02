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
                    <h3 class="box-title">Thêm sản phẩm</h3>
                    {if isset($err)}
                    <h3 align="center" style="color: #ff0000">{$err}</h3>
                    {/if}
                </div><!-- /.box-header -->
                <div class="box-body">
                    <form role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group has-success">
                            <label class="control-label" for="ten_xe"><i class="fa fa-check"></i> Tên Xe</label>
                            <input type="text" class="form-control" id="ten_xe" name="ten_xe" value="{$data['ten_xe']}" placeholder="Enter ..." />
                        </div>
                        <div class="form-group has-warning">
                            <label class="control-label" for="ten_xe_url"><i class="fa fa-bell-o"></i> Tên Xe URL</label>
                            <input type="text" class="form-control" name="ten_xe_url" id="ten_xe_url" value="{$data['ten_xe_url']}" placeholder="Enter ..." />
                        </div>
                        <!-- text input -->
                        <div class="form-group">
                            <label>Đơn Giá</label>
                            <input type="text" class="form-control" id="don_gia" name="don_gia" value="{$data['don_gia']}" placeholder="Enter ..." />
                        </div>
                        <div class="form-group">
                            <label>Giá Khuyến Mãi</label>
                            <input type="text" class="form-control" id="gia_khuyen_mai" name="gia_khuyen_mai" value="{$data['gia_khuyen_mai']}" placeholder="Enter ..." />
                        </div>
                        
                        <div class="form-group">
                            <label>Khuyến Mãi</label>
                            <input type="text" class="form-control" id="khuyen_mai" name="khuyen_mai" placeholder="Enter ..." />
                        </div>
                        <div class="form-group">
                            <label>Nội dung tóm tắt</label>
                            <textarea rows="5" class="form-control " id="noi_dung_tom_tat" name="noi_dung_tom_tat">{$data['noi_dung_tom_tat']}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Nội dung Chi Tiết</label>
                            <textarea rows="5" class="ckeditor " id="noi_dung_chi_tiet" name="noi_dung_chi_tiet">{$data['noi_dung_chi_tiet']}</textarea>
                        </div>
                    
                        <div class="form-group">
                            <label>Ngày Cập Nhật</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control" id="ngay_cap_nhat" name="ngay_cap_nhat" placeholder="yyyy/mm/dd" />
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                        <label>Đơn Vị Tính</label>
                        <select class="form-control select2" name="dvt">
                            <option selected="selected" value="CEO">VND</option>
                            <option value="USD">USD</option>
                            <option value="Euro">Euro</option>
                            <option value="Big Coin">Big Coin</option>
                        </select>
                        
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"  name="status" {if {$data['status']}==1}checked="checked"{/if}  />
                                Status
                            </label>
                        </div>
                        <label>Hãng Xe</label>
                        <select class="form-control select2" name="idhang_xe">
                            {foreach $DSLoaiSanPham as $itemSelect}
                            <option value="{$itemSelect['idhang_xe']}" selected="selected">{$itemSelect['ten_hang']}</option>
                            {/foreach}
                        </select>
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