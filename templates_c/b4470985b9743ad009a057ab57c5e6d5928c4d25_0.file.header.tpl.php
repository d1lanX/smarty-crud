<?php
/* Smarty version 3.1.38, created on 2022-06-23 02:53:19
  from 'C:\xampp\htdocs\smarty-crud\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_62b3b97fd25f70_28278943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4470985b9743ad009a057ab57c5e6d5928c4d25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty-crud\\templates\\header.tpl',
      1 => 1655945562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b3b97fd25f70_28278943 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <nav class="navbar bg-dark fixed-top">
      <div class="container-fluid">
            <a class="navbar-brand text-light" href="">App</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú Inicial</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Pedidos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="php/vendedor.php">Vendedores</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </head>
<?php }
}
