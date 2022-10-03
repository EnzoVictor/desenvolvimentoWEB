<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php
            //is_array -> Verifica se o parâmetro é um array
            $array_array = [];
            $elemento = is_array($array_array);

            if($elemento){
                echo 'É um array';
            } else {
                echo 'Não é um array';
            }

            echo '<hr>';

            //array_keys -> Retorna todas as chaves de um array

            $array_keys = [1 => 'frutas', 52 => 'Móveis', 13 => 'Roupas'];
            echo '<pre>';
            print_r($array_keys);
            echo '</pre>';
            $chave_array = array_keys($array_keys);
            echo '<pre>';
            print_r($chave_array);
            echo '</pre>';

            echo '<hr>';
            //sort -> Ordena um array e reajusta seus índices
            $array_sort = ['teclado', 'gabinete', 'mouse', 'fonte', 'hd', 'cabo hdmi', 'monitor'];
            echo '<pre>';
            print_r($array_sort);
            echo '</pre>';
            sort($array_sort);
            echo '<pre>';
            print_r($array_sort);
            echo '</pre>';

            echo '<hr>';

            //asort -> Ordena um array preservando os índices
            $array_asort = ['teclado', 'gabinete', 'mouse', 'fonte', 'hd', 'cabo hdmi', 'monitor'];
            echo '<pre>';
            print_r($array_asort);
            echo '</pre>';
            asort($array_asort);
            echo '<pre>';
            print_r($array_asort);
            echo '</pre>';

            echo '<hr>';
            //count -> Conta a quantidade de elementos de um array
            $array_count = ['teclado', 'gabinete', 'mouse', 'fonte', 'hd', 'cabo hdmi', 'monitor'];
            echo count($array_count);

            echo '<hr>';
            //array_merge -> Funde um ou mais arrays
            $array_merge1 = ['Vencedor'];
            $array_merge2 = ['Vitorioso'];
            $array_merge3 = ['Imbátivel'];
            $merge = array_merge($array_merge1, $array_merge2, $array_merge3);
            echo '<pre>';
            print_r($merge);
            echo '</pre>';

            echo '<hr>';
            //explode -> Divide uma string baseada em um delimitador
            $string = '04/08/2022';
            $array_explode = explode('/', $string);
            echo '<pre>';
            print_r($array_explode);
            echo $array_explode[2]. '/'. $array_explode[1]. '/'. $array_explode[0];
            echo '</pre>';

            echo '<hr>';
            //implode -> Junta elementos de um array em uma string
            $array_implode = ['e', 'n', 'z', 'o'];
            $implode_retorno = implode('.', $array_implode);
            echo $implode_retorno;
        ?>
	</body>
</html>
