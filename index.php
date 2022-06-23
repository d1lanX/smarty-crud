<?php
    require('Smarty.class.php');
    require('db.php');
    $smarty = new Smarty;
    $smarty->template_dir = './templates';
    $smarty->config_dir = './config';
    $smarty->cache_dir = './cache';
    $smarty->compile_dir = './templates_c';
    $smarty->display('index.tpl');

    // ------------------------------------------------------- \\

    $sql = "SELECT * FROM detalle_ventas";
    $query = $connect->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
?>