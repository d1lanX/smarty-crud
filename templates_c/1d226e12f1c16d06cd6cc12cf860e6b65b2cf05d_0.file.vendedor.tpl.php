<?php
/* Smarty version 3.1.38, created on 2022-06-22 22:36:27
  from 'D:\Xampp\htdocs\smarty-crud\templates\vendedor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_62b37d4b047be8_17962143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d226e12f1c16d06cd6cc12cf860e6b65b2cf05d' => 
    array (
      0 => 'D:\\Xampp\\htdocs\\smarty-crud\\templates\\vendedor.tpl',
      1 => 1655930019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62b37d4b047be8_17962143 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['titulo']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable1), 0, false);
?>
<body>
    
    <div class="container">

        <form class="row g-3 needs-validation mt-5" validate>
            <div class="col-12 mt-5 text-center">
                <h1 class="display-6">Nuevo Vendedor</h1>
            </div>
            <div class="col-md-4 mt-5">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" 
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" required>
                
            </div>
            <div class="col-md-4 mt-5">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" value=""
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" required>
                
            </div>
            <div class="col-md-4 mt-5">
                <label for="telefono" class="form-label">Teléfono</label>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">📞</span>
                <input type="number" class="form-control" id="telefono" 
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" aria-describedby="inputGroupPrepend" required>
                
                </div>
            </div>
            <div class="col-md-6">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" 
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" required>
                
            </div>
            <div class="col-md-3">
                <label for="empresa" class="form-label">Empresa</label>
                <select class="form-select" id="empresa" 
                oninvalid="this.setCustomValidity('Llena este campo')"
                oninput="setCustomValidity('')" required>
                <option selected disabled value="">Escoge...</option>
                <option>Pepsi</option>
                <option>Colanta</option>
                <option>CocaCola</option>
                <option>Bimbo</option>
                </select>
                
            </div>
           
            <div class="col-12">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>

    </div>
    
</body>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
