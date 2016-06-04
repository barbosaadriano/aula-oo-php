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

    function __construct($tipo) {
        $this->tipo = $tipo;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setPorta($porta) {
        if (is_numeric($porta)) {
            $this->porta = $porta;
        }
    }

    function getPorta() {
        return $this->porta;
    }

    function conectar() {
        if ($this->tipo == 'mysql') {
            $this->conexao = mysqli_connect($this->endereco, $this->usuario, $this->senha, 'test', $this->porta);
            if (!$this->conexao) {
                throw new Exception(mysqli_connect_error());
            }
        }
    }

    function desconectar() {
        if ($this->conexao) {
            mysqli_close($this->conexao);
            $this->conexao = null;
        }
    }

    public function __destruct() {
        $this->desconectar();
    }

}
