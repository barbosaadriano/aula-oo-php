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

}
