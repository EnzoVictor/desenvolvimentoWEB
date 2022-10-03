<?php
    session_start();
    include("conecta.php");

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $id=$_POST['id'];
    $respUser=$_POST['respUser'];

    $dataResp=date("d/m/Y  H:i");

    if($respUser != null){
        mysqli_query($conexao, "UPDATE Dados SET respUser='$respUser', dataResp='$dataResp'  WHERE id=$id");
        header("location: consultar_chamado.php?id=".$id);
    } else{
        header("location: consultar_chamado.php?");
    }


?>