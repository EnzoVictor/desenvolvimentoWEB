<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Curso PHP</title>
    </head>
    <body>

        <?php

            $valor_da_compra = 225;
            $cartao_loja = true;

            $valor_frete = 50;
            $recebeu_desconto_frete = false;

            if ($cartao_loja == true && $valor_da_compra >= 150){
                $valor_frete = 0;
                $recebeu_desconto_frete = true;
            }
        ?>

        <h1>Detalhes da compra</h1>

        <p>Possui o cartão da loja?
        <?php
            if($cartao_loja){
                echo 'Sim';
            } else{
                echo 'Não';
            }
        ?></p>

        <p>Vai ter desconto no frete?
         <?php
            if($recebeu_desconto_frete){
                echo 'Sim! no valor de ';
                echo $valor_frete;
            }
         ?>
         </p>

         <p>Valor da compra: <?php echo $valor_da_compra ?> </p>

    </body>
</html>
