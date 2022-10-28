<?php

    session_start();

    include("conecta.php");

    $emailCadastrado = false;

    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['senha'] = $_POST['senha'];

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    $seleciona = mysqli_query($conexao, "select * from dados order by id desc");
    while($campo = mysqli_fetch_array($seleciona)){
        if($_SESSION['email'] == $campo['email'] AND $_SESSION['senha'] == $campo['senha']){
            header("location: index.php?login=error3");
            $emailCadastrado = true;
        }
    }
    if(!$emailCadastrado){
        if($_SESSION['email'] != null and $_SESSION['senha'] != null){
            $_SESSION['autenticado'] = 'SIM';
            header("location:home.php");
        }else{
            header("location: cadastro_login.php?login=error4");
        }
    }
?>