<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>

        <?php
            //CASTING DE TIPOS

            //Int: float, string

            //Float: int, string

            //String: int, boolean

            //Boolean: int, string

            //gettype() => retorna o tipo da variável

            $valor = 'a';

            $valor2 = (bool) $valor;

            echo $valor. ' '. gettype($valor);
            echo '<br>';
            echo $valor2. ' '. gettype($valor2);

        ?>


	</body>
</html>
