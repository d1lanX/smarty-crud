<?php 
    include_once("../db.php");
    require('Smarty.class.php');

    $smarty = new Smarty;
    $smarty->template_dir = '../templates';
    $smarty->config_dir = '../config';
    $smarty->cache_dir = '../cache';
    $smarty->compile_dir = '../templates_c';

    function consultaSelect($nombreTabla, $camposConsult, $valoresConsult){
        global $connect;
        $condicion = "WHERE";

        for($index = 0; $index < $camposConsult; $index++){
            $condicion = ($index == (count($camposConsult) - 1)) ? $condicion."`". $camposConsult[$index]."` = '"
                .$valoresConsult[$index]."'" : $condicion."`".$camposConsult[$index]."`= '".$valoresConsult[$index].
                "' AND ";

        }

        $sql = "";

    }

    $smarty->display('vendedor.tpl');
?>