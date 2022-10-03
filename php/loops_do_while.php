<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php
             $num = 10;
             do{
                // No do while o loop é exceutado uma vez mesmo sendo false, diferente do while tradicional
                echo 'Entrou no do while';
             }while($num < 9);

             //Fazendo o mesmo exemplo com o while tradicional

             while($num <9){
                echo 'Não será printada na tela, pois a condição é falsa';
             }
        ?>
	</body>
</html>
