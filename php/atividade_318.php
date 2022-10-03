<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>

        <?php

            $nome = 'Tiago';
            $idade = 16;
            $peso = 72;


            $status = $idade > 16 && $idade <= 69 && $peso >= 50 ? 'Atende aos requisitos' : 'Não atende aos requisitos';
        ?>

        <h1>Doação de sangue</h1>

        <h3>Dados do possível doador</h3>

        <p>Nome: <?= $nome ?> </p>
        <p>Idade: <?= $idade ?> </p>
        <p>Status: <?= $status ?> </p>

	</body>
</html>
