<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>

        <h2>Incremento</h2>

        <h3>Pós-incremento</h3>
        <?php
            $a = 10;

            echo "O valor de A é $a <br>";
            echo 'O valor contido em após incremento de A é '. $a++ . '<br>';
            echo "O valor contido em A atualizado $a";
        ?>

        <h3>Pré-incremento</h3>
        <?php
            $a = 10;

            echo "O valor de A é $a <br>";
            echo 'O valor contido no pré incremento de A é '. ++$a . '<br>';
            echo "O valor contido em A atualizado $a";
        ?>

        <h2>Decremento</h2>

        <h3>Pós-decremento</h3>
        <?php
            $a = 10;

            echo "O valor de A é $a <br>";
            echo 'O valor contido em após decremento de A é '. $a-- . '<br>';
            echo "O valor contido em A atualizado $a";
        ?>

        <h3>Pré-decremento</h3>
        <?php
            $a = 10;

            echo "O valor de A é $a <br>";
            echo 'O valor contido no pré decremento de A é '. --$a . '<br>';
            echo "O valor contido em A atualizado $a";
        ?>
	</body>
</html>
