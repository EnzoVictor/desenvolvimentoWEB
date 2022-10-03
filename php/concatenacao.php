<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Curso PHP</title>
  </head>
  <body>

    <?php
        $nome = 'Tiago';

        $idade = 15;

        $peso = 78.5;

        $hoby = 'Jogar bola';


        //Operador .
        echo 'Olá ' . $nome . ' , notei que você tem ' . $idade . '  anos e seu peso atual é de ' . $peso . ' kilos, também pude perceber que você gosta de ' . $hoby;

        echo '<br>';

        //Aspas duplas
        echo "Olá $nome, notei que você tem $idade anos e seu peso atual é de $peso kilos, também pude perceber que você gosta de $hoby";
    ?>


  </body>
</html>
