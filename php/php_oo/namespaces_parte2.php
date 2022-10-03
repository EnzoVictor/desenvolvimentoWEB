<?php

    require "biblioteca/lib1/lib1.php";
    require "biblioteca/lib2/lib2.php";

    use A\Cliente as c1;

    use B\Cliente;

    $c = new c1();

    echo '<pre>';
    print_r($c);
    echo '</pre>';


    /*
    CONSIDERAÇÕES:

    - require é a mesma função para o javascript, funciona da mesma forma.
    - Quando houver conflitos com nomes de classes iguais, basta utilizar o 'AS', que funciona como sendo um apelido
    para a váriavel, fazendo com que não haja mais conflito de nomes iguais.
    */
?>