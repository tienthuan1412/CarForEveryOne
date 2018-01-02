<?php
/* Smarty version 3.1.30, created on 2018-01-02 05:30:05
  from "C:\wamp64\www\ShowRoom\views\template\layoutAdmin\masterAdmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4b18ddbb4544_41591918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e31179fb3a083358a31b4a4d413a85b09b603276' => 
    array (
      0 => 'C:\\wamp64\\www\\ShowRoom\\views\\template\\layoutAdmin\\masterAdmin.tpl',
      1 => 1510131644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layoutAdmin/head.tpl' => 1,
    'file:layoutAdmin/header.tpl' => 1,
    'file:layoutAdmin/navigation.tpl' => 1,
    'file:layoutAdmin/footer.tpl' => 1,
    'file:layoutAdmin/script.tpl' => 1,
  ),
),false)) {
function content_5a4b18ddbb4544_41591918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <!-- head -->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121105a4b18ddb539c5_85405600', "head");
?>

  <body onLoad="timeRefresh(6000);">
  <!-- container section start -->
  <section id="container" class="">
      <!-- header -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62555a4b18ddb66406_81347205', "header");
?>

      <!-- navigation -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_270045a4b18ddb79156_64055872', "navigation");
?>

      <!--main content start-->
      <section id="main-content">
          <section class="main">
			<!-- content -->
        <div class="content-wrapper"  id="mainKhachHang">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_250935a4b18ddb86b41_48020391', "content");
?>

        </div>
            
            
          </section>
      </section>
      <!--main content end-->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_292745a4b18ddb9b2e7_78061685', 'footer');
?>

  </section>
  
  <!-- container section end -->
    <!-- script -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195955a4b18ddbae793_38775861', "script");
?>

  </body>
</html>
<?php }
/* {block "head"} */
class Block_121105a4b18ddb539c5_85405600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
/* {block "header"} */
class Block_62555a4b18ddb66406_81347205 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block "navigation"} */
class Block_270045a4b18ddb79156_64055872 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "navigation"} */
/* {block "content"} */
class Block_250935a4b18ddb86b41_48020391 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block 'footer'} */
class Block_292745a4b18ddb9b2e7_78061685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
/* {block "script"} */
class Block_195955a4b18ddbae793_38775861 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layoutAdmin/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "script"} */
}
