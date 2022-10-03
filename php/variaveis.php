<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Curso PHP</title>
  </head>
  <body>

    <?php
        // String
        $nome = 'Enzo Santana';

        //Int
        $idade = 21;

        //float
        $peso = 78.5;

        //Boolean
        $fumante_sn = true; //true(resultado = 1) ou false(resultado = vazio)
    ?>

    <h1>Ficha cadastral</h1>

    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>




  </body>
</html>
