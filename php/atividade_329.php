<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php

            function impostoRenda($salario){
                //fazendo a verificação sobre o salario
                if($salario <= 1903.98){
                    echo 'Isento!';
                } else if($salario >= 1903.99 AND $salario <= 2826.65) {
                    $porcentagem = 7.2 / 100;
                    $valorTotal = $porcentagem * $salario;

                    echo 'Alíquota de 7,2%';
                    echo '<br>';
                    echo 'Valor do imposto a ser pago '. $valorTotal;
                } else if ($salario >= 2826.66 AND $salario <= 3751.05){
                    $porcentagem = 15 / 100;
                    $valorTotal = $porcentagem * $salario;

                    echo 'Alíquota de 15%';
                    echo '<br>';
                    echo 'Valor do imposto a ser pago '. $valorTotal;
                } else if ($salario >= 3751.06 AND $salario <= 4664.68){
                    $porcentagem = 22.5 / 100;
                    $valorTotal = $porcentagem * $salario;

                    echo 'Alíquota de 22.5%';
                    echo '<br>';
                    echo 'Valor do imposto a ser pago '. $valorTotal;
                } else if ($salario > 4664.68){
                    $porcentagem = 27.5 / 100;
                    $valorTotal = $porcentagem * $salario;

                    echo 'Alíquota de 27.5%';
                    echo '<br>';
                    echo 'Valor do imposto a ser pago '. $valorTotal;
                }
            }


            impostoRenda(2500);
        ?>
	</body>
</html>
