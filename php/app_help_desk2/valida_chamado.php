<?php

    session_start();

    require("conecta.php");

    $_SESSION['titulo'] = $_POST['titulo'];
    $_SESSION['categoria'] = $_POST['categoria'];
    $_SESSION['descricao'] = $_POST['descricao'];

    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $titulo = $_SESSION['titulo'];
    $categoria = $_SESSION['categoria'];
    $descricao = $_SESSION['descricao'];
    $nomeResp = null;
    $respAdmin = null;
    $respUser = null;
    $dataResp = null;


    //echo '<pre>';
    //print_r($_SESSION);
    //echo '</pre>';

    if($nome != null and $titulo != null and $descricao != null and $categoria != null){
        $data = date('d/m/Y H:i');
        $status = 'pendente';
        mysqli_query($conexao, "insert into Dados (nome, email, senha, titulo, categoria, descricao, data, status, nomeResp, respAdmin, respUser, dataResp) values ('$nome', '$email', '$senha', '$titulo', '$categoria', '$descricao', '$data', '$status' , '$nomeResp', '$respAdmin', '$respUser', '$dataResp')");
        header("location: abrir_chamado.php?chamado=enviado");
    } else{
        header("location: abrir_chamado.php?chamado=cancelado");
    }


?>