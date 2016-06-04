<?php
require_once 'sgbd.php';
/**
 * Description of BaseDeDados
 *
 * @author Administrador
 */
class BaseDeDados extends sgbd {

    var $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

}
