<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php
            $empresa = [
            ['nome' => 'Marcos', 'Salario' => 2500],
            ['nome' => 'Ana', 'Salario' => 2759],
            ['nome' => 'Caio', 'Salario' => 2000],
            ];

            echo '<pre>';
            print_r($empresa);
            echo '</pre>';

            foreach($empresa as $id => $funcionarios){
                foreach($funcionarios as $id2 => $valor){

                    echo "$id2 - $valor <br>";

                }
                echo '<hr>';
            }
        ?>
	</body>
</html>
