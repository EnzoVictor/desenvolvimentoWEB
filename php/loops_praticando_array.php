<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php
            //Métodos de percorrer um array usando while, do while e for.

            $lista_coisas = [
            ['titulo' => 'Conteudo titulo', 'Conteudo' => 'Conteudo'],
            'Caderno',
            'Lápis',
            'Borracha',
            'Mochila'];

            $indice = 0;
            // --------- WHILE ------------
            /*
            while ($indice < 4){
                echo $lista_coisas[$indice]['Conteudo'];
                echo '<br>';
                echo '<hr>';
                $indice++;
            }
            */
            //------------ DO WHILE ----------------
            /*
            do{

                echo $lista_coisas[$indice]['titulo'];
                echo '<br>';

                $indice++;

            }while($valor < 4);
            */
            //------------- FOR --------------
            /*
            for ($indice = 0; $indice < 4; $indice++){
                echo $lista_coisas[$indice]['titulo'];
                echo '<br>';
            }
            */
        ?>
	</body>
</html>
