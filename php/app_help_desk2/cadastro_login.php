<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 400px;
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
              Cadastro
            </div>
            <div class="card-body">
              <form action='valida_cadastro.php' method='post'>
                <div class="form-group">
                  <input name='nome' type="text" class="form-control" placeholder="Nome">
                </div>
                <div class="form-group">
                  <input name='sobrenome' type="text" class="form-control" placeholder="Sobrenome">
                </div>
                <div class="form-group">
                  <input name='email' type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name='senha' type="password" class="form-control" placeholder="Senha">
                </div>
                <? if(isset($_GET['login']) && $_GET['login'] == 'error4'){?>
                    <div style='text-align:center; font-size:15px;' class='text-danger'>
                        Algum campo não foi preenchido corretamente.
                    </div>
                <? } ?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>