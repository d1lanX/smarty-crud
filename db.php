<?php

define('DB_HOST', 'mysql-udevo.alwaysdata.net');
define('DB_USER', 'udevo');
define('DB_PASS', 'cliperino');
define('DB_NAME', 'udevo_empleados');

try{ 
    $connect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch(PDOException $e)
{
    exit("Error: ". $e->getMessage());
}

?>