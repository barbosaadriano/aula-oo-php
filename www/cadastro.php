<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '../logs/error_log.txt');
error_reporting(E_ALL);

////////////////////////////////////////////////////////////////////////////////

require './autoload.php';

use Alfa\SGBD;
use Alfa\BaseDeDados;
use Alfa\Produto;

$servidor = new SGBD('mysql');
$servidor->setEndereco("localhost");
$servidor->usuario = "root";
$servidor->senha = "";
$servidor->setPorta(3306);
$base = new BaseDeDados("test", $servidor);

echo $servidor->endereco;

try {
    $base->conectar();
} catch (\Exception $exc) {
    echo $exc->getMessage() . $exc->getTraceAsString();
}

$produto = new Produto($base);
$produto->nome = "Teste asd asd asd";
$produto->preco = 907.00;
$produto->setId(123);
echo $produto->getId();
die;

try {
    $produto->create();    
} catch (\Exception $exc) {
    echo $exc->getMessage();
}



$base->desconectar();

