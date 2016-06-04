<?php

class sgbd {

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
            mysqli_connect($this->endereco, $this->usuario, $this->senha, 'test', $this->porta);
        }
    }

    function desconectar() {
        
    }

}
