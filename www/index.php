<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '../logs/error_log.txt');
error_reporting(E_ALL);

////////////////////////////////////////////////////////////////////////////////

require '../class/sgbd.php';
$servidor = new sgbd('mysql');

echo $servidor->tipo;

$servidor->endereco = "::1";
$servidor->usuario = "root";
$servidor->senha = "";
$servidor->porta = 3306;

var_dump($servidor);
