<!--
    Diferença do INCLUDE para o REQUIRE:

    INCLUDE -> Se houver um erro no endereço informado, o conteúdo será executado da mesma forma, apenas mostrando um aviso
    REQUIRE -> Se houver um erro no endereço, a operação será finalizada de imediato
    INCLUDE_ONCE -> Caso o include_once seja solicitado mais de uma vez, o processo rodará somente uma vez, pois
     identifica que o include_once já está sendo utilizado. Diferente do INCLUDE
    REQUIRE_ONCE -> Assim como o Include_once, o require_once identificacaso esteja sendo chamado mais de uma vez no
     código e rodará apenas uma vez. Diferente do REQUIRE
 -->

<?php
    //include ('inicio2.php'); // Forçando um erro (warning)

    //require ('inicio2.php'); // Forçando um erro (fatal error)
?>

<?php
    //include 'inicio.php';

    include_once 'inicio.php';
?>

conteúdo do site (minha rede)

<?php
    echo '<br>';
    //include 'inicio.php';

    include_once 'inicio.php';

    //Da mesma forma vale pro require_once.
?>