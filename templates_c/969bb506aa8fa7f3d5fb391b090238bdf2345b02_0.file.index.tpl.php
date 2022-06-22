<?php
/* Smarty version 3.1.38, created on 2022-06-21 23:40:39
  from 'C:\xampp\htdocs\smarty-crud\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_62b23ad7622a86_69273249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '969bb506aa8fa7f3d5fb391b090238bdf2345b02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-crud\\templates\\index.tpl',
      1 => 1655847047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62b23ad7622a86_69273249 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['titulo']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable1), 0, false);
?>
<body>
<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

</body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
