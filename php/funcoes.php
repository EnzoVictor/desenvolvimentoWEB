<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php
            //Void (sem retorno)
            function boasVindas(){
                echo 'Seja bem vindo ao PHP';
            }

            boasVindas();

            //Return (com retorno)

            function calculaLarguraTerreno($largura, $terreno){
                $area = $largura * $terreno;

                return $area;
            }

            echo '<br>';

            $areaTerreno = calculaLarguraTerreno(50, 500);

            echo $areaTerreno;


        ?>
	</body>
</html>
