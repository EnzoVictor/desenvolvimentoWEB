<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Curso PHP</title>
    </head>
    <body>

        <?php

            //Operadores de Condições

            //== IGUAL
            //=== IDÊNTICO
            //!= ou <> DIFERENTE
            //!== DIFERENTE IDÊNTICO
            //< MENOR
            //> MAIOR
            //<= MENOR OU IGUAL
            //>= MAIOR OU IGUAL


            //Operadores Lógicos
            //E: && ou AND -> retorna verdadeiro se todos os resultados forem true
            //OU: || ou OR -> retorna verdadeiro se pelo menos uma das condições forem true
            //XOR: XOR -> retorna verdadeiro se somente uma das condições for true
            //! -> iverte o resultado retornado pela expressão

            if(!(2 == 2 xor 2 > 1)){
                echo 'Verdadeiro';
            } else{
                echo 'Falso';
            }

        ?>

    </body>
</html>
