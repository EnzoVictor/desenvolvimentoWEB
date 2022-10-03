<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>
        <?php
            //in_array() -> true ou false para a existência do que está procurando
            //array_search() -> Retorna o índice do valor pesquisado

            $lista_frutas = ['Morango', 'Uva', 'Abacate', 'Melancia'];

            $existe = in_array('Pessego', $lista_frutas);

            if($existe){
                echo 'Sim, existe na lista';
            } else {
                echo 'Não, não existe na lista';
            }

            echo '<hr>';
            //Usando o método de pesquisa in_array

            $existe2 = in_array('Banana', $lista_frutas);

            if($existe2){
                echo 'Sim, existe na lista';
            } else {
                echo 'Não, não existe na lista';
            }

            echo '<hr>';
            //Pesquisando em um array multidimensional

            $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['luciano', 'vanusa', 'tiago']
            ];

            echo '<pre>';
            print_r($lista_coisas);
            echo '</pre>';

            $naLista = in_array('Uva', $lista_coisas['frutas']);

            if($naLista){
                echo 'Sim, está na lista no índice '. $naLista;
            } else{
                echo 'Não, não existe na lista ';
            }
        ?>
	</body>
</html>
