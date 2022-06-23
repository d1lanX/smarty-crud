<?php
/* Smarty version 3.1.38, created on 2022-06-23 00:25:41
  from 'D:\Xampp\htdocs\smarty-crud\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_62b396e55fec82_33059278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af941d4843f34fb323f324913ff7b310492759aa' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\smarty-crud\\templates\\index.tpl',
      1 => 1655936739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62b396e55fec82_33059278 (Smarty_Internal_Template $_smarty_tpl) {
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
                <th># Venta</th>
                <th>Articulo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Fecha</th>
            </tr>
            <tr>
                <td>1121</td>
                <td>Arroz</td>
                <td>25</td>
                <td>$35.000</td>
                <td>24/06/2022 5:21:20PM</td>
            </tr>

        </table>    
    
    </div>
    
</body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
