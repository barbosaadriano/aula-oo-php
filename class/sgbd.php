<?php

class sgbd {

    /**
     *
     * @var mysqli 
     */
    public $conexao;
    protected $endereco;
    protected $porta;
    public $senha;
    public $usuario;
    public $tipo;

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function getEndereco() {
        return $this->endereco;
    }

    public function setPorta($porta) {
        if (is_numeric($porta)) {
            $this->porta = $porta;
        }
    }

    public function getPorta() {
        return $this->porta;
    }

}
