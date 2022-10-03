<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php

            //Funções nativas para operações matematicas

            $num = 7.3;

            //ceil -> Arredonda o valor pra cima
            //echo ceil($num);

            //floor -> Arredonda o valor para baixo
            //echo floor($num);

            //round -> Arredonda o valor com base nas casas decimais
            //echo round($num);

            //rand -> Gera um inteiro aleatório
            //echo rand(10, 20);
            //echo '<br>'. getrandmax(); //Mostra o valor máximo que pode ser gerado

            //sqrt -> Retorna a raiz quadrada
            echo sqrt($num);
        ?>
	</body>
</html>
