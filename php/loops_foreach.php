<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php
            $times = ['São Paulo', 'Santos', 'Corinthians', 'Palmeiras', 'Flamengo', 'Fluminense', 'Cruzeiro'];

            foreach($times as $clube){
                echo "$clube ";

                if ($clube == 'São Paulo'){
                    echo " O time mais vencedor do Brasil. <br>";
                }
                echo "<br>";
            }
        ?>
	</body>
</html>
