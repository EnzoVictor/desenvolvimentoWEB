<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php
            $variavel1 = null;
            $variavel2 = '';
            $variavel3 = false;

            if(is_null($variavel1)){
                echo 'Sim, a variavel é null';
            } else{
                echo 'Não, a variável não é null';
            }

            echo '<br>';

            if(is_null($variavel2)){
                echo 'Sim, a variavel é null';
            } else{
                echo 'Não, a variável não é null';
            }

            echo '<br>';

            if(is_null($variavel3)){
                echo 'Sim, a variavel é null';
            } else{
                echo 'Não, a variável não é null';
            }

            echo '<br>';

            echo '<hr>';

            if(empty($variavel1)){
                echo 'Sim, a variavel é vazio';
            } else{
                echo 'Não, a variável não é vazio';
            }

            echo '<br>';

            if(empty($variavel2)){
                echo 'Sim, a variavel é vazio';
            } else{
                echo 'Não, a variável não é vazio';
            }

            echo '<br>';

            if(empty($variavel3)){
                echo 'Sim, a variavel é vazio';
            } else{
                echo 'Não, a variável não é vazio';
            }

            echo '<br>';
        ?>
	</body>
</html>
