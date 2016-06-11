<?php

namespace Alfa;

/**
 * Description of Entidade
 *
 * @author Administrador
 */
abstract class Entidade {

    abstract public function setEndereco($endereco);
    
     public function create() {

        $entidade = strtolower(substr(__CLASS__, strrpos(__CLASS__, "\\") + 1));
        $attrs = get_object_vars($this);
        $cols = array_keys($attrs);
        $valores = array_values($attrs);
        
        $sql = "INSERT INTO {$entidade} (" . implode(",", $cols) . ") "
                . " VALUES ('".  implode("','", $valores) ."')";
        
        if (!mysqli_query(self::$dependencia->conexao, $sql)) {
            throw new \Exception(mysqli_error(self::$dependencia->conexao));
        }
    }
}
