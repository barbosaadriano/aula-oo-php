<?php

require_once 'sgbd.php';

/**
 * Description of BaseDeDados
 *
 * @author Administrador
 */
class BaseDeDados extends sgbd {

    public $nome;
    public $dependencia;

    public function __construct($nome,  sgbd $servidor) {
        $this->nome = $nome;
        $this->dependencia = $servidor;
    }

    public function conectar() {
        if ($this->dependencia->tipo == 'mysql') {
            $this->conexao = mysqli_connect($this->dependencia->endereco, $this->dependencia->usuario,
                    $this->dependencia->senha, $this->nome, $this->dependencia->porta);
            if (!$this->conexao) {
                throw new Exception(mysqli_connect_error());
            }
        }
    }

}
