<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php
             $num = 1;
             echo '---Inicio do loop-----';
             while($num < 100){
                $num++;
                if($num == 1 || $num == 5){
                    continue;
                }
                echo "$num <br>";
             }
             echo '---Fim do loop----';
        ?>
	</body>
</html>
