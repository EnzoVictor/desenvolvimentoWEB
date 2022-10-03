<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php
            $megasena = [];
            for($num = 0; $num < 6; $num++){
                $valores = rand(1, 60);
                array_push($megasena, $valores);

            }
            echo '<h1>Números do sorteio da MegaSena:</h1>';
            echo '<pre>';
            print_r($megasena);
            echo '</pre>';

            //rand -> Gera um inteiro aleatório
            //echo rand(10, 20);
            //echo '<br>'. getrandmax(); //Mostra o valor máximo que pode ser gerado

        ?>
	</body>
</html>
