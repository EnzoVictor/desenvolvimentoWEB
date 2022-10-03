<?php
    session_start();
    include("conecta.php");


    $status_respondido = 'respondido';

    $email_usuario = $_POST['email-usuario'];

    $id = $_POST['id'];

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    $dataUser = $_POST['data'];
    $status = $_POST['status'];
    $respAdmin = $_POST['resposta'];
    $nomeResp = $_SESSION['nome'];

    $dataResp = date("d/m/Y  H:i");
    if($respAdmin != null){
        mysqli_query($conexao, "UPDATE Dados SET status='$status_respondido', respAdmin='$respAdmin', dataResp='$dataResp', nomeResp='$nomeResp'  WHERE id=$id");
        header("location: consultar_chamado.php?id=".$id);
    } else {
        header("location: consultar_chamado.php");
    }

?>