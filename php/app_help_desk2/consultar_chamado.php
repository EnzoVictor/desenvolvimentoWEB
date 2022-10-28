<?php

    require_once("validador_acesso.php");
    include("conecta.php");


    $admin = true;


?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='../sweetalert/jquery-3.6.1.min'></script>
    <script src='../sweetalert/sweetalert2.all.min'></script>
    <script src="https://kit.fontawesome.com/c155be470f.js" crossorigin="anonymous"></script>
    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }

      .textarea{
        padding-left: 15px;
        padding-top: 15px;
        height: 200px;
      }


      .input-icon{
        margin-bottom: 5px;
      }

      .icone-user{
        position: absolute;
        padding: 10px;
        min-width: 50px;
        text-align: center;
      }

      .input-field{
        width: 100%;
        padding: 10px;
        text-align: center;
      }
    </style>
  </head>

    <body>

        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="home.php">
                <img src="imagem/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                App Help Desk
            </a>
            <ul class='navbar-nav'>
                <li class='nav-item'>
                    <a class='nav-link' href='logoff.php'>SAIR</a>
                </li>
            </ul>
        </nav>

        <div class="container">
            <div class="row">

                <div class="card-consultar-chamado">
                    <div class="card">
                        <div class="card-header">
                          Consulta de chamado
                        </div>

                        <div class="card-body">
                        <?php
                            $seleciona = mysqli_query($conexao, "select * from Dados order by id desc");
                            while($campo = mysqli_fetch_array($seleciona)){?>

                            <?php
                                if($_SESSION['email'] != 'admin@gmail.com'){
                                    //Só vamos exibir o chamado, se ele foi criado pelo próprio usuário
                                    $admin=false;
                                    if($_SESSION['email'] != $campo['email']){
                                        continue;
                                    }
                                }

                            ?>

                            <?php

                                $id = $campo['id'];
                                $email = $campo['email'];
                                $status = $campo['status'];
                                $data = $campo['data'];
                                $nome = $campo['nome'];
                                $dataResp = $campo['dataResp'];
                                $respAdmin = $campo['respAdmin'];
                                $nomeResp = $campo['nomeResp'];
                                $respUser = $campo['respUser'];


                            ?>

                            <div style='cursor:pointer;' class="card mb-3 bg-light">
                                <div class="card-body" onclick="status('<?=$status?>', '<?=$data?>', '<?=$nome?>', '<?=$email?>')">
                                  <h5 class="card-title" style='color:black'><?=$campo['titulo']?></h5>
                                  <h6 class="card-subtitle mb-2 text-muted" style='color:black'><?=$campo['categoria']?></h6>
                                  <p class="card-text" style='color:gray'><?=$campo['descricao']?></p>
                                </div>
                                <? if($admin){ ?>

                                <form action='resposta_admin.php' method='post'>
                                    <div class='form-group'>
                                        <textarea name='resposta' class='form-control textarea'></textarea>
                                        <div class='row'>
                                            <div class='col-md-6'>
                                                <div class='input-icon'>
                                                    <input name='id' value="<?php echo $campo['id']?>" type='hidden'></input>
                                                    <input name='nome' value="<?php echo $campo['nome']?>" type='hidden'></input>
                                                    <input name='email' value="<?php echo $campo['email']?>" type='hidden'></input>
                                                    <input name='senha' value="<?php echo $campo['senha']?>" type='hidden'></input>
                                                    <input name='titulo' value="<?php echo $campo['titulo']?>" type='hidden'></input>
                                                    <input name='categoria' value="<?php echo $campo['categoria']?>" type='hidden'></input>
                                                    <input name='descricao' value="<?php echo $campo['descricao']?>" type='hidden'></input>
                                                    <input name='data' value="<?php echo $campo['data']?>" type='hidden'></input>
                                                    <input name='status' value="<?php echo $campo['status']?>" type='hidden'></input>
                                                </div>
                                            </div>
                                        </div>

                                        <?
                                            $id_chamado = $_GET['id'];
                                            if($id_chamado == $id){?>
                                                <div class='text-success'>
                                                    Chamado respondido com sucesso.<i class="fa-solid fa-circle-check"></i>
                                                </div>
                                            <?}
                                        ?>

                                        <button type='submit' class='form-control btn btn-outline-primary mt-2'>Responder</button>
                                    </div>
                                </form>

                                <?
                                    if($campo['respAdmin']){?>

                                        <button class='btn btn-outline-success' onclick="verHistorico('<?=$dataResp?>', '<?=$nome?>', '<?=$respUser?>')">
                                           Ver histórico
                                        </button>
                                    <?}
                                ?>
                                <? } ?>

                                <? if(!$admin){ ?>
                                    <? if($campo['status'] == 'respondido'){ ?>
                                        <?
                                            $id_chamado = $_GET['id'];
                                            if($id_chamado == $id){?>
                                                <div class='text-success'>
                                                    Chamado respondido com sucesso.<i class="fa-solid fa-circle-check"></i>
                                                </div>
                                            <?}
                                        ?>
                                        <button onclick="verResposta('<?=$status?>', '<?=$dataResp?>', '<?=$nomeResp?>', '<?=$respAdmin?>', '<?=$id?>')" class='btn btn-outline-success' style=' width: 20%;'>ver resposta</button>
                                    <? } ?>
                                <? } ?>
                            </div>

                            <?php }?>

                            <script>
                                 function verResposta(status, dataResp, nomeResp, respAdmin, id){

                                    Swal.fire({
                                        title: 'Última atualização: ' + dataResp,
                                        html: "respondido pelo(a): " + nomeResp + "<br>"
                                        + "<hr>" + respAdmin + "<br><br>" + "<hr>"
                                        + "<form action='resposta_user.php' method='post'><input type='hidden' name='id' value="+id+"><textarea name='respUser' class='form-control' style='height: 300px;'></textarea><button type='submit' class='mt-4 btn btn-outline-primary'>Enviar</button></form>",
                                        showCancelButton: false,
                                        showConfirmButton: false

                                    })

                                }
                            </script>


                            <script>
                                 function verHistorico(dataResp, nomeResp, respUser){

                                    Swal.fire({
                                        type: 'type',
                                        title: 'Última atualização: ' + dataResp,
                                        html: "respondido pelo(a): " + nomeResp + "<br>"
                                        + "<hr>"
                                        + "<p>" + respUser + "</p>"

                                    })

                                }
                            </script>



                            <script>
                                 function status(status, data, nomeUsuario, email){

                                    Swal.fire({
                                        type: 'type',
                                        title: 'Status: ' + status,
                                        html: "<i style='color:blue;'>criado pelo(a): </i>" + nomeUsuario + "<br>" +"<i style='color:blue'> Data: </i>" + data
                                        + "<br>" + "<i style='color:blue'> Email: </i>" + email
                                    })

                                }
                            </script>

                            <div class="row mt-5">
                                <div class="col-6">
                                    <a class="btn btn-lg btn-warning btn-block" href='home.php'>Voltar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>