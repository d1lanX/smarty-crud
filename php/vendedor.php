<?php 
    require('Smarty.class.php');
    require('../db.php');
    require('../consolServer/consulUtil.php');


    $smarty = new Smarty();
    $consulJ = new consolUtil();

    $smarty->template_dir = '../templates';
    $smarty->config_dir = '../config';
    $smarty->cache_dir = '../cache';
    $smarty->compile_dir = '../templates_c';

    // ---------------------------------------------------------------- \\
    $tabla = "cliente";
    $consulta = $consulJ->consultarTodosRegistros($tabla);
    
    /* Se asigna el valor de la consulta en variable smarty $resultados*/
    $smarty->assign('resultados', $consulta); 
    // ---------------------------------------------------------------- \\


    if(isset($_POST['guardar'])){
        $nombre = filter_input(INPUT_POST, 'nombre');
        $apellido = filter_input(INPUT_POST, 'apellido');
        $telefono = filter_input(INPUT_POST, 'telefono');
        $direccion = filter_input(INPUT_POST, 'direccion');
        $empresa = filter_input(INPUT_POST, 'empresa');

        define("TABLADATABASE", "cliente");
        define("CAMPOSCLIENTES", array("nom_cli", "apell_cli", "empresa_cli", "direcc_cli", "telef_cli"));
        define("VALORESCLIENTES", array($nombre, $apellido, $telefono, $direccion, $empresa));

        $sql = $consulJ->insertar(TABLADATABASE, CAMPOSCLIENTES, VALORESCLIENTES);

        if($sql->execute()) {
            header("Location: vendedor.php");
        }
        
    } 

    $smarty->display('vendedor.tpl');


?>