<?php
    session_start();

    $usuarioAutenticado = false;

    //Verifcar se o email consta no banco de dados.
    include("conecta.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $seleciona = mysqli_query($conexao, "select * from Dados order by id desc");
    while($campo = mysqli_fetch_array($seleciona)){
        if($email == $campo['email'] && $senha == $campo['senha']){
            echo 'email já cadastrado no banco';
            $_SESSION['nome'] = $campo['nome'];
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $usuarioAutenticado = true;
        }
    }

    if(!$usuarioAutenticado){
        header("location: index.php?login=error");
        $_SESSION['autenticado'] = 'NAO';
    } else{
        $_SESSION['autenticado'] = 'SIM';
        header("location: home.php");
    }
?>