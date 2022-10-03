<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>

        <?php

            $valor_da_compra = 500;
            $cartao_loja = true;

            $valor_frete = 50;
            $recebeu_desconto_frete = true;

            if ($cartao_loja && $valor_da_compra >= 400){
                $valor_frete = 0;
            }else if($cartao_loja && $valor_da_compra >= 300){
                $valor_frete = 10;
            }else if($cartao_loja && $valor_da_compra >= 200){
                $valor_frete = 25;
            }else if($cartao_loja && $valor_da_compra >= 100){
                $valor_frete = 40;
            }else {
                $recebeu_desconto_frete = false;
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
                echo 'Sim!';
            } else{
                echo 'Não';
            }
         ?>
        </p>

        <p>Valor do frete:
            <?php
                echo $valor_frete;
            ?>
        </p>

        <p>Valor da compra: <?php echo $valor_da_compra; ?> </p>

	</body>
</html>
