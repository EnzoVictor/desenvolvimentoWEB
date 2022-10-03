<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php

            //Funções nativas para manipular strings

            $texto = 'Bem vindo Enzo';

            //string to lower -> Tranforma todos os caracteres em minúsculo

            echo $texto. '<br>';
            echo strtolower($texto);

            //string to upper -> Tranforma todos os caracteres em MAIÚSCULO

            echo '<hr>';

            echo $texto. '<br>';
            echo strtoupper($texto);

            //upper case first -> Tranforma o primeiro caracterer em MAIÚSCULO

            echo '<hr>';

            echo $texto. '<br>';
            echo ucfirst($texto);

            //string length -> conta quantos caracteres há na variável incluindo o espaço

            echo '<hr>';

            echo $texto. '<br>';
            echo strlen($texto);

            //string replace -> Substitui uma cadeia d caracteres por outra dentro de uma string

            echo '<hr>';

            echo $texto. '<br>';
            echo str_replace(' ', '', $texto);

            //substr -> reparti uma string quebrando ela a partir do índice informado

            echo '<hr>';
            //Bem vindo Enzo
            echo $texto. '<br>';
            echo substr($texto, 10, 13);
        ?>
	</body>
</html>
