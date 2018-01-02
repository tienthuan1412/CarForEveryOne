<?php
/* Smarty version 3.1.30, created on 2017-12-21 19:42:49
  from "C:\wamp64\www\ShowRoom\views\template\layout\masterSanPham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3c0eb949a830_69483526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d6e23e57c5698114e13cdd357beb98184c32b1a' => 
    array (
      0 => 'C:\\wamp64\\www\\ShowRoom\\views\\template\\layout\\masterSanPham.tpl',
      1 => 1480951821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/head.tpl' => 1,
    'file:layout/headerSP.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:layout/script.tpl' => 1,
  ),
),false)) {
function content_5a3c0eb949a830_69483526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <!--Head-->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81235a3c0eb944c471_36013132', "head");
?>

  <body>
	<!--Header-->
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114805a3c0eb94588b2_93233503', "header");
?>

 	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61935a3c0eb9460781_98616265', "content");
?>

 	
	<!--Footer-->
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_274145a3c0eb947aed3_07617407', "footer");
?>

   	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_318955a3c0eb94939a1_65723198', "script");
?>


	
  </body>
</html><?php }
/* {block "head"} */
class Block_81235a3c0eb944c471_36013132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
/* {block "header"} */
class Block_114805a3c0eb94588b2_93233503 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/headerSP.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block "content"} */
class Block_61935a3c0eb9460781_98616265 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "footer"} */
class Block_274145a3c0eb947aed3_07617407 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
/* {block "script"} */
class Block_318955a3c0eb94939a1_65723198 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "script"} */
}
