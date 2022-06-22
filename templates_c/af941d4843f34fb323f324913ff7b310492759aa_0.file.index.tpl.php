<?php
/* Smarty version 3.1.38, created on 2022-06-22 16:55:30
  from 'D:\Xampp\htdocs\smarty-crud\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_62b32d62c35714_27039364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af941d4843f34fb323f324913ff7b310492759aa' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\smarty-crud\\templates\\index.tpl',
      1 => 1655909716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62b32d62c35714_27039364 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['titulo']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable1), 0, false);
?>
<body>
</body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
