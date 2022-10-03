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

            //Atualizando o valor_frete usando o operador ternário

            $valor_frete_aux = $cartao_loja && $valor_da_compra >= 400 ? 0 : ($cartao_loja && $valor_da_compra >= 300 ? 10 : ($cartao_loja && $valor_da_compra >= 200 ? 25 : $valor_frete));

            $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

            $valor_frete = $valor_frete_aux;
        ?>

        <h1>Detalhes da compra</h1>
        <!-- Utilizando operador ternário -->
        <p>Possui o cartão da loja? <?= $cartao_loja ? 'Possui' : 'Não possui'; ?> </p>

        <p>Vai ter desconto no frete? <?= $recebeu_desconto_frete ? 'Sim' : 'Não'; ?></p>

        <p>Valor do frete: <?= $valor_frete; ?> </p>

        <p>Valor da compra: <?= $valor_da_compra; ?> </p>

	</body>
</html>
