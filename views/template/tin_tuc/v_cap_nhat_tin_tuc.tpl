{extends file="layoutAdmin/masterAdmin.tpl"}
{block name='content'}
<script src="{$path}public/ckeditor/ckeditor.js"></script>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
               Cập nhật tin tức
             </header>
            <div class="panel-body">
              {if isset($err)}
                  <h3 align="center" style="color: #ff0000">{$err}</h3>
              {/if}
               <div class="form">
              
                    <form class="form-validate form-horizontal " id="register_form" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label for="fullname" class="control-label col-lg-2">Tiêu để <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="tieu_de" name="tieu_de" type="text" value="{$data['tieu_de']}" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Tiêu đề URL <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="tieu_de_url" name="tieu_de_url" type="text" value="{$data['tieu_de_url']}"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Hình <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="hinh" name="hinh" type="file"/>
                            </div>
                        </div>
                          <div class="form-group ">
                            <label for="username" class="control-label col-lg-2">Tác giả<span class="required">*</span></label>
                            <div class="col-lg-10">
                                <textarea rows="1" class="form-control " id="tac_gia" name="tac_gia">{$data['tac_gia']}</textarea>
                            </div><br><br>


                        <div class="form-group ">
                           
                            <label for="address" class="control-label col-lg-2">Ngày đăng<span class="required">*</span></label>
                            <div class="col-lg-2">
                                <input class=" form-control" id="ngay_dang" name="ngay_dang" type="date" value="{$data['ngay_dang']}"/>
                        </div>
                        <div class="form-group ">
                         <label for="address" class="control-label col-lg-2">Ngày Gửi<span class="required">*</span></label>
                            <div class="col-lg-2">
                                <input class=" form-control" id="ngay_gui" name="ngay_gui" type="date" value="{$data['ngay_gui']}"/>
                            </div>
                            </div>
                        <div class="form-group ">
                            <label for="username" class="control-label col-lg-2">Nội dung tóm tắt <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <textarea rows="5" class="form-control " id="tom_tat" name="tom_tat">{$data['tom_tat']}</textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="username" class="control-label col-lg-2">Nội dung chi tiết <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <textarea rows="5" class="ckeditor " id="chi_tiet" name="chi_tiet">{$data['chi_tiet']}</textarea>
                            </div>
                        </div>
                       
                     
                        
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input class="btn btn-primary" type="submit" value="Cập nhật" name="btnCapNhat" />
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

{/block}