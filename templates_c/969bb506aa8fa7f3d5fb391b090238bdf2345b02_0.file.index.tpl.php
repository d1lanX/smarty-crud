<?php
/* Smarty version 3.1.38, created on 2022-06-23 02:53:19
  from 'C:\xampp\htdocs\smarty-crud\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_62b3b97fa16962_27003904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '969bb506aa8fa7f3d5fb391b090238bdf2345b02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-crud\\templates\\index.tpl',
      1 => 1655945562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62b3b97fa16962_27003904 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['titulo']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable1), 0, false);
?>
<body>
    
    <div class="container">

        <br>
        <div class="col-12 mt-5">
            <h1 class="display-6">Últimas ventas</h1>
        </div>
    
        <table class="table table-striped mt-3">
                    <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Juan</td>
                <td>Gonzalez</td>
                <td>2378920</td>
            </tr>

        </table>    
    
    </div>
    
</body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
