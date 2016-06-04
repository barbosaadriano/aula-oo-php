<?php

/**
 * Description of BaseDeDados
 *
 * @author Administrador
 */
class BaseDeDados {

    public $conexao;
    public $nome;
    public $dependencia;

    public function __construct($nome, sgbd $servidor) {
        $this->nome = $nome;
        $this->dependencia = $servidor;
    }

    public function conectar() {
        if ($this->dependencia->tipo == 'mysql') {
            $this->conexao = mysqli_connect($this->dependencia->getEndereco(), $this->dependencia->usuario, $this->dependencia->senha, $this->nome, $this->dependencia->getPorta());
            if (!$this->conexao) {
                throw new Exception(mysqli_connect_error());
            }
        }
    }

    public function desconectar() {
        if ($this->conexao) {
            mysqli_close($this->conexao);
            $this->conexao = null;
        }
    }

    public function __destruct() {
        $this->desconectar();
    }

}
