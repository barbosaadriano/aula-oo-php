<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '../logs/error_log.txt');
error_reporting(E_ALL);

////////////////////////////////////////////////////////////////////////////////

require './autoload.php';

use \Alfa\SGBD;
use \Alfa\BaseDeDados;

$servidor = new SGBD('mysql');
$servidor->setEndereco("localhost");
$servidor->usuario = "root";
$servidor->senha = "";
$servidor->setPorta(3306);

$base = new BaseDeDados("test", $servidor);
$base->tipo = "mysql";

try {
    $base->conectar();
    var_dump($base->conexao);
} catch (\Exception $exc) {
    echo $exc->getMessage() . $exc->getTraceAsString();
}

$base->desconectar();

echo "<a href=\"./cadastro.php\">Cadastros</a>";
