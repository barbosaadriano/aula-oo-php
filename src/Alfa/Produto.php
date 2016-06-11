<?php

namespace Alfa;

/**
 * Description of Produto
 *
 * @author Administrador
 */
class Produto {

    use \Alfa\Traits\Create;

    public static $id;
    public $nome;
    public $preco;

    /**
     *
     * @var \Alfa\BaseDeDados 
     */
    public static $dependencia;

    function __construct(\Alfa\BaseDeDados $base) {
        self::$dependencia = $base;
    }

}
