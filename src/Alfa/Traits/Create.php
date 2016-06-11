<?php

namespace Alfa\Traits;

trait Create {

    

    public function create() {

        $entidade = strtolower(substr(__CLASS__, strrpos(__CLASS__, "\\") + 1));
        $attrs = get_object_vars($this);
        $cols = array_keys($attrs);
        $valores = array_values($attrs);
        
        $sql = "INSERT INTO {$entidade} (" . implode(",", $cols) . ") "
                . " VALUES ('".  implode("','", $valores) ."')";
        die($sql);
        if (!mysqli_query($this->dependencia->conexao, $sql)) {
            throw new \Exception(mysqli_error($this->dependencia->conexao));
        }
    }

}
