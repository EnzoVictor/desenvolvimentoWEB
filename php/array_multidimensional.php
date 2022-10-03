<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php

            //Array multidimensional

            $lista_coisas = [];

            $lista_coisas['frutas'] = [ 1 => 'Banana', 2 =>  'Maçã', 3 =>  'Morango', 4 =>  'Uva'];
            $lista_coisas['pessoas'] = [ 1 => 'Luciano', 2 =>  'Vanusa', 3 =>  'Enzo', 4 =>  'Tiago'];

            echo '<pre>';
                print_r($lista_coisas);
            echo '</pre>';

            echo $lista_coisas['frutas'][2];

        ?>
	</body>
</html>
