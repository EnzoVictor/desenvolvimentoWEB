<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php

            //Array sequêncial (numéricos)

            $lista_frutas = array('Morango', 'Banana', 'Abacate', 'Uva'); // Ou posso fazer desse modo: $lista_frutas = [...]
            $lista_frutas[] = 'Melancia';

            echo '<pre>';
                print_r($lista_frutas);
            echo '</pre>';

            echo '<pre>';
                var_dump($lista_frutas);
            echo '</pre>';

            echo $lista_frutas[3];

            //Array associativos

            echo '<hr>';

            $lista_frutas_mercado = [
            'a' => 'Morango',
            'b' => 'Banana',
            'c' => 'Abacate',
            'd' => 'Uva',
            ];

            echo '<pre>';
                print_r($lista_frutas_mercado);
            echo '</pre>';

            echo '<pre>';
                var_dump($lista_frutas_mercado);
            echo '</pre>';

            echo $lista_frutas_mercado['a'];

        ?>
	</body>
</html>
