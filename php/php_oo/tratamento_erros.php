<?php

    try{
        //Lógica onde pode acontecer um eventual erro
        echo '<h3>*** try ***</h3>';

        //Forçando um erro de exemplo
        /*$sql = 'Select * fom clientes';
        mysql_query($sql); //erro*/

        //Forçando um erro (exception)
        if(!file_exists('arquivo_exception.php')){
            throw new Exception('O arquivo em questão deveria estar disponivel ás '. date('d/m/Y H:i'). ' . Porém não se encontra este arquivo');
        }

    } catch (Error $e){
        //Funciona para tratar o erro. Ele literalmente captura o erro e trata da forma como quiser
        echo '<h3> *** Cath Error ***</h3>';
        //Irá tratar o erro do Try acima
        echo '<p style="color:red;">'. $e . '</p>';

    } catch (Exception $ex){
        //Fazendo o tratamento do exception
        echo '<h3> *** Catch Exception ***</h3>';
        echo '<p style="color: red">' . $ex . '</p>';

    } finally{
        //Sempre será executado (opcional)
        echo '<h3> *** Finally *** </h3>';
    }


?>