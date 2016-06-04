<?php

    require '../class/sgbd.php';
    
    $servidor = new sgbd('mysql');
    
    echo $servidor->tipo;
       