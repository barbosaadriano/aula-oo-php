<?php

class sgbd {

    /**
     *
     * @var mysqli 
     */
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
                throw new Exception(mysqli_connect_error());
            }
        }
    }

    function desconectar() {
        if ($this->conexao) {
            mysqli_close($this->conexao);
        }
    }

    public function __destruct() {
        $this->desconectar();
    }
}
