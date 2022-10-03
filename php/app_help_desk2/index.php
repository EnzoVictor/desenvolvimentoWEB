<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="imagem/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action='validando_login.php' method='post'>
                <div class="form-group">
                  <input name='email' type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name='senha' type="password" class="form-control" placeholder="Senha">
                </div>
                <? if(isset($_GET['login']) && $_GET['login'] == 'error'){?>
                    <div style='text-align:center; font-size:15px;' class='text-danger'>
                        Usuário ou senha inválido(s)
                    </div>
                <? } ?>

                <? if(isset($_GET['login']) && $_GET['login'] == 'error2'){?>
                    <div style='text-align:center; font-size:15px;' class='text-danger'>
                        Faça o login antes de acessar as páginas
                    </div>
                <? } ?>

                <? if(isset($_GET['login']) && $_GET['login'] == 'error3'){?>
                    <div style='text-align:center; font-size:15px;' class='text-danger'>
                        Este login já está cadastrado. Favor, reedigitar novamente.
                    </div>
                <? } ?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                <div style="text-align:center; font-size: 15px;" class='mt-3'>
                    <a href='cadastro_login.php' style='text-decoration:none;'>Realizar um cadastro</a>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>