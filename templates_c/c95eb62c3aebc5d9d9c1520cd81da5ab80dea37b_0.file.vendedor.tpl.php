<?php
/* Smarty version 3.1.38, created on 2022-06-27 23:51:37
  from 'C:\xampp\htdocs\smarty-crud\templates\vendedor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_62ba26692f10e5_38918282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c95eb62c3aebc5d9d9c1520cd81da5ab80dea37b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-crud\\templates\\vendedor.tpl',
      1 => 1656121369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62ba26692f10e5_38918282 (Smarty_Internal_Template $_smarty_tpl) {
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
                <label for="telefono" class="form-label">Tel??fono</label>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">????</span>
                <input type="number" class="form-control" id="telefono"
                name="telefono" 
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" aria-describedby="inputGroupPrepend" required>
                
                </div>
            </div>
            <div class="col-md-6">
                <label for="direccion" class="form-label">Direcci??n</label>
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
            <th>Tel??fono</th>
            <th>Empresa</th>
            <th>Direcci??n</th>
            <th>Opci??n</th>
        </tr>
                <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Tel??fono</td>
            <td>Direcci??n</td>
            <td>Empresa</td>
            <td></td>
        </tr>
                </table>
    </div>
    
</body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
