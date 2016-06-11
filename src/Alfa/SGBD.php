<?php
namespace Alfa;
class SGBD implements Interfaces\SGBD {

    /**
     *
     * @var mysqli 
     */
    protected $endereco;
    protected $porta;
    public $senha;
    public $usuario;
    public $tipo;

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }
    
    public function __get($name) {
        return $this->endereco;
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
