<?php
/* Smarty version 3.1.38, created on 2022-06-28 03:23:18
  from 'D:\Xampp\htdocs\smarty-crud\templates\vendedor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_62ba5806b4d143_70443398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d226e12f1c16d06cd6cc12cf860e6b65b2cf05d' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\smarty-crud\\templates\\vendedor.tpl',
      1 => 1656379389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62ba5806b4d143_70443398 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['titulo']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable1), 0, false);
?>
<body>
    
    <div class="container">

        <form class="row g-3 needs-validation mt-5"
         action="../php/vendedor.php" method="POST" validate>

            <div class="col-12 mt-5 text-center">
                <h1 class="display-6">Nuevo Vendedor</h1>
            </div>
            <div class="col-md-4 mt-5">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre"
                name="nombre" 
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" required>
                
            </div>
            <div class="col-md-4 mt-5">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido"
                name="apellido" value=""
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" required>
                
            </div>
            <div class="col-md-4 mt-5">
                <label for="telefono" class="form-label">Teléfono</label>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">📞</span>
                <input type="number" class="form-control" id="telefono"
                name="telefono" 
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" aria-describedby="inputGroupPrepend" required>
                
                </div>
            </div>
            <div class="col-md-6">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion"
                name="direccion" 
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" required>
                
            </div>
            <div class="col-md-3">
                <label for="empresa" class="form-label">Empresa</label>
                <select class="form-select" id="empresa"
                name="empresa" 
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" required>
                <option selected disabled value="">Escoge...</option>
                <option value="PEPSI">Pepsi</option>
                <option value="COLANTA">Colanta</option>
                <option value="COCA-COLA">CocaCola</option>
                <option value="BIMBO">Bimbo</option>
                </select>
                
            </div>
           
            <div class="col-12">
                <button class="btn btn-success" name="guardar" type="submit">Guardar</button>
            </div>
        </form>

        <?php if ($_smarty_tpl->tpl_vars['seGuardo']->value == true) {?>
        <div class="alert alert-success" role="alert">
        El registro fue guardado exitosamente!
        </div>
        <?php }?>

    </div>

    <div class="container">
        
        <table class="table table-striped mt-5">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Empresa</th>
            <th>Dirección</th>
            <th>Opción</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultados']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
            
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['result']->value->id_cli;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['result']->value->nom_cli;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['result']->value->apell_cli;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['result']->value->empresa_cli;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['result']->value->direcc_cli;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['result']->value->telef_cli;?>
</td>
            
            <td>
            <a href="../php/vendedor.php?idPC=<?php echo $_smarty_tpl->tpl_vars['result']->value->id_cli;?>
" class="btn btn-outline-warning btn-block"><i class="far fa-edit"></i></a>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    
</body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
