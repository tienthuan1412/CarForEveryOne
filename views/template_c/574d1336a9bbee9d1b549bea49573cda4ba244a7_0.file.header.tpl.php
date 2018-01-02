<?php
/* Smarty version 3.1.30, created on 2018-01-02 05:30:06
  from "C:\wamp64\www\ShowRoom\views\template\layoutAdmin\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4b18de0eb9e0_43929387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '574d1336a9bbee9d1b549bea49573cda4ba244a7' => 
    array (
      0 => 'C:\\wamp64\\www\\ShowRoom\\views\\template\\layoutAdmin\\header.tpl',
      1 => 1510937971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4b18de0eb9e0_43929387 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>T</b>MT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b> TMT</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri.html" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success" id="sodhMoi"><?php echo $_smarty_tpl->tpl_vars['SoDonDatHangMoi']->value;?>
</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have <?php echo $_smarty_tpl->tpl_vars['SoDonDatHangMoi']->value;?>
 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DonDatHang']->value, 'dh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dh']->value) {
?>
                          <a href="#">
                            <div class="pull-left">
                              <?php if (isset($_SESSION['hinh'])) {?>
                              <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/dist/img/<?php echo $_SESSION['hinh'];?>
" class="img-circle" alt="User Image" />
                              <?php }?>
                            </div>
                            <h4>
                              <?php echo $_smarty_tpl->tpl_vars['dh']->value['ten_khach_hang'];?>

                              <small><i class="fa fa-clock-o"></i><?php echo $_smarty_tpl->tpl_vars['dh']->value['ngay_dat'];?>
</small>
                            </h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['dh']->value['ghi_chu'];?>
</p>
                          </a>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                      </li><!-- end message -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <?php if (isset($_SESSION['hinh'])) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/dist/img/<?php echo $_SESSION['hinh'];?>
" class="user-image" alt="User Image" />
                  <?php }?>
                  <?php if (isset($_SESSION['hinh'])) {?>
                    <span class="hidden-xs"><?php echo $_SESSION['username'];?>
</span>
                  <?php }?>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <?php if (isset($_SESSION['hinh'])) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/admin/dist/img/<?php echo $_SESSION['hinh'];?>
" class="img-circle" alt="User Image" />
                    <?php }?>
                    <?php if (isset($_SESSION['hinh'])) {?>
                    <p>
                      <?php echo $_SESSION['username'];?>

                      <small><?php echo $_SESSION['role'];?>
</small>
                    </p>
                    <?php }?>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/lock-screen.html" class="btn btn-default btn-flat">Lock Screen</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
quan-tri/nguoi-dung/dang-xuat.html" class="btn btn-default btn-flat">Sign out</a>
                    </div>

                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
     

      <!-- Content Wrapper. Contains page content -->
     
     

      <!-- Control Sidebar -->
    
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      
  </body><?php }
}
