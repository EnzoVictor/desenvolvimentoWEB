<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "senha";
    $dbname = "help_desk";


    $mysqli = new mysqli($servidor, $usuario, $senha, $dbname);


    if($mysqli->connect_errno){
        echo 'falha na conexão'. $mysqli->connect_errno;
    }
?>