<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php
            // date -> Recuperar a data atual
            echo date('d/m/Y H:i');

            echo '<br>';

            //date_default_timezone_get(timezone) -> Recuperar o timezone default da aplicação
            echo date_default_timezone_get();
            //date_default_timezone_set(timezone) -> Atualizar o timezone default da aplicação
            date_default_timezone_set('America/Sao_Paulo');
            echo '<br>';
            echo date('d/m/Y H:i');

            //strtotime(data) -> Transformar datas textuais em segundos

            echo '<hr>';

            $data_inicial = '2022-08-02';
            $data_final = '2022-10-02';

            $data_inicial_segundos = strtotime($data_inicial);

            $data_final_segundos = strtotime($data_final);

            $segundos_dia = 24 * 60 * 60;

            $diferenca_segundos = $data_final_segundos - $data_inicial_segundos;

            $diferenca_de_dias = $diferenca_segundos / $segundos_dia;

            echo 'A diferença são de '. $diferenca_de_dias . ' dias';
        ?>
	</body>
</html>
