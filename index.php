<?php
    require('Smarty.class.php');
    $smarty = new Smarty;
    $smarty->template_dir = './templates';
    $smarty->config_dir = './config';
    $smarty->cache_dir = './cache';
    $smarty->compile_dir = './templates_c';
    $smarty->assign('titulo', 'App');
    $smarty->display('index.tpl');
?>