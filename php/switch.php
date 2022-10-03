<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Curso PHP</title>
	</head>
	<body>

        <?php

            //Caso o parametro seja TRUE e houver uma case com o valor 1 e outra case com o valor TRUE
            // A case que estiver em primeiro será executada, pois no php o retorno de TRUE é 1.

            $parametro = '2';

            switch($parametro){

                case 3:
                    //Código a ser exibido
                    echo 'Caiu no case 1';
                    break;

                case 'abc':
                    //Código a ser exibido
                    echo 'Caiu no case 2';
                    break;

                case 1:
                    //Código a ser exibido
                    echo 'Caiu no case 3';
                    break;

                case 'a':
                    //Código a ser exibido
                    echo 'Caiu no case 4';
                    break;

                default:
                    //Código sera exibido caso nenhuma case acima atenda o parametro
                    echo 'Caiu no default';
                    break;
            }
        ?>


	</body>
</html>
