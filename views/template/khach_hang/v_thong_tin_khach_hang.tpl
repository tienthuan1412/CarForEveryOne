{extends file="layout/masterSanPham.tpl"}
{block name='content'}
<div class="container-fluid">
    <div style="background-color: #fff; margin: 10px auto; width: 30%; border: 3px solid black; ">
        <h1 class="text-center">Thông tin khách hàng</h1>
    </div>
    <div class="container" style="border: 5px solid #000; margin: 20px auto;">
        <div class="row profile">
            <div class="col-md-3" style="border: 1px solid black;">
                <div class="profile-sidebar">
                    <div class="profile-userpic"> <img src="{$path}public/images/husky.jpg " class="img-responsive" alt="Thông tin cá nhân">
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name"> Trương Công Minh (đẹp trai) </div>
                        <div class="profile-usertitle-job" >
                           Nam
                        </div>
                    </div>
                    <div class="profile-userbuttons">
                        <button type="button" class="btn btn-sm" style="background-color: #23B684; color: white">Trang chủ</button>
                        <button type="button" class="btn btn-danger btn-sm"><a style="color: white" href="{$path}khach-hang/dang-xuat.html">Đăng xuất</a></button>
                    </div>
                    <div class="profile-usermenu">
                        <ul class="nav">

                            <div class="menu-icon"><span>Menu</span></div>
                            <li>
                                <a href=""> <i class="glyphicon glyphicon-info-sign"></i> Cập nhật thông tin cá nhân </a>
                            </li>

                            <li>
                               <li><a href="#" data-toggle="dropdown"><span data-hover="ShortCodes"><i class="glyphicon glyphicon-shopping-cart"></i> Quản lý đơn hàng</span><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href=""><span data-hover="Icons">Mới tạo</span></a></li>
                                    <li><a href=""><span data-hover="Typograpghy">Đang giao hàng</span></a></li>
                                    <li><a href=""><span data-hover="Typograpghy">Giao hàng thành công</span></a></li>
                                    <li><a href=""><span data-hover="Typograpghy">Chờ chuyển COD</span></a></li>
                                     <li><a href=""><span data-hover="Typograpghy">Đã Thu Tiền</span></a></li>
                                      <li><a href=""><span data-hover="Typograpghy">Đã Chuyển COD</span></a></li>
                                </ul>
                            </li>   
                        </li>
                        <li>
                            <a href=""> <i class="glyphicon glyphicon-envelope"></i> Tin nhắn </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9" style="border: 1px solid black; border-left: none;">
            <div class="col-md-12 w3-agile-grid">
                <div style="padding-top: 50px;"></div>
                <div class="w3-address" >
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>Điện Thoại</h6>
                            <p style="color: black">01244444402</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>Email</h6>
                            <p style="color: black">Email :truongcongminh96@gmail.com</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3-address-grid">
                        <div class="w3-address-left">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="w3-address-right">
                            <h6>Địa chỉ</h6>
                            <p style="color: black">294/9B, XVNT, P.21, Q.Bình Thạnh, TP.HCM
                            </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
{/block}
