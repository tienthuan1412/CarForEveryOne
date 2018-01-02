<?php
/* Smarty version 3.1.30, created on 2017-12-21 19:40:52
  from "C:\wamp64\www\ShowRoom\views\template\layout\master.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3c0e4421f226_88658339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e7d4d4de08eaaabd77c48bdba3c732b3734a6b5' => 
    array (
      0 => 'C:\\wamp64\\www\\ShowRoom\\views\\template\\layout\\master.tpl',
      1 => 1510068662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/head.tpl' => 1,
    'file:layout/header.tpl' => 1,
    'file:layout/banner.tpl' => 1,
    'file:layout/footer.tpl' => 1,
    'file:layout/script.tpl' => 1,
  ),
),false)) {
function content_5a3c0e4421f226_88658339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<!---->

<!--head-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69485a3c0e441f1e28_31686217', "head");
?>

<body>
<!--header-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139655a3c0e441fa737_89733747', "header");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_246425a3c0e442017a1_79416837', "banner");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185155a3c0e442069c3_73111559', "body");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178085a3c0e4420f555_46308400', "footer");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119135a3c0e4421c021_66772252', "script");
?>

</body>
</html>
<?php }
/* {block "head"} */
class Block_69485a3c0e441f1e28_31686217 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
/* {block "header"} */
class Block_139655a3c0e441fa737_89733747 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "header"} */
/* {block "banner"} */
class Block_246425a3c0e442017a1_79416837 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner"} */
/* {block "body"} */
class Block_185155a3c0e442069c3_73111559 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
/* {block "footer"} */
class Block_178085a3c0e4420f555_46308400 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
/* {block "script"} */
class Block_119135a3c0e4421c021_66772252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layout/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "script"} */
}
