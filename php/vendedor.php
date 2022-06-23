<?php 
    require('Smarty.class.php');
    require('../db.php');
    $smarty = new Smarty;
    $smarty->template_dir = '../templates';
    $smarty->config_dir = '../config';
    $smarty->cache_dir = '../cache';
    $smarty->compile_dir = '../templates_c';
    $smarty->assign('seGuardo', false);
    $smarty->display('vendedor.tpl');

// ------------------------------------------------------- \\

    if(isset($_POST['guardar'])){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $empresa = $_POST['empresa'];

        $id = generarNumeroRandom(); // <----HAY QUE PONER AUTOINCREMENT EN LA BASE DE DATOS PARA ESTE ID    
        //$id = 1; // <----HAY QUE PONER AUTOINCREMENT EN LA BASE DE DATOS PARA ESTE ID    

        $sql = "INSERT INTO cliente (id_cli, nom_cli, apell_cli, empresa_cli, direcc_cli,
        telef_cli) VALUES (:id_cli, :nom_cli, :apell_cli, :empresa_cli, :direcc_cli, :telef_cli)";

        $sql = $connect->prepare($sql);

        $sql->bindParam(':id_cli', $id, PDO::PARAM_INT, 10);
        $sql->bindParam(':nom_cli', $nombre, PDO::PARAM_STR, 36);
        $sql->bindParam(':apell_cli', $apellido, PDO::PARAM_STR, 36);
        $sql->bindParam(':empresa_cli', $empresa, PDO::PARAM_STR, 50);
        $sql->bindParam(':direcc_cli', $direccion, PDO::PARAM_STR, 80);
        $sql->bindParam(':telef_cli', $telefono, PDO::PARAM_STR, 36);

        $sql->execute();
        $result = $connect->lastInsertId();
        
        if(!empty($result)) {
            $smarty->assign('seGuardo', true);
            header("Location: ./vendedor.php");
        }
    }


    function generarNumeroRandom(){
        $numeros = "0123456789";
        $numero = "";
        for($i = 0; $i < 7; $i++){
            $numero.=$numeros[rand(0, 8)];
        }

        return (int)$numero;
    }


?>