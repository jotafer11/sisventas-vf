<?php

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'sisventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "Conexion a la bd exitosa";
}catch(PDOException $e) {
    //print_r($e);
    echo "Error al conectar a la BD";
}
$URL = "http://localhost:8080/sisventas-v";

date_default_timezone_set("America/Argentina/Jujuy");

$fechaHora = date (format: 'Y-m-d');

