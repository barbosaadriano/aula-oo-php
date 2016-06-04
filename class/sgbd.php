<?php

class sgbd {

    var $conexao;
    var $endereco;
    var $porta;
    var $senha;
    var $usuario;
    var $tipo;

    function __construct($tipo) {
        $this->tipo = $tipo;
    }

    function conectar() {
        if ($this->tipo == 'mysql') {
            $this->conexao = mysqli_connect($this->endereco, $this->usuario, $this->senha, 'test', $this->porta);
            if (!$this->conexao) {
                echo "Erro: " . mysqli_error();
            }
        }
    }

    function desconectar() {
        
    }

}
