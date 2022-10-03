<?php

    class ExceptionCustomizado extends Exception{
        private $e = '';

        function __construct($erro){
            $this->e = $erro;
        }

        function exibirErro(){
            echo '<div style="border: 1px solid red; color: black; padding: 10px;">';
                echo $this->e;
            echo '</div>';
        }
    }

    try{
        throw new ExceptionCustomizado('Este é um erro teste');

    } catch (ExceptionCustomizado $e){
        $e->exibirErro();

    }



?>




