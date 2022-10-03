<?php

    class Exemplo{

        public static $atributo1 = 'Sou um atributo estático';
        public $atributo2 = 'Sou um atributo normal';

        static function metodo1(){
            echo 'Sou um método estático';
        }

        function metodo2(){
            echo 'Sou um método normal';
        }
    }

    //$x = new Exemplo();
    echo Exemplo::$atributo1;
    echo '<br>';
    echo Exemplo::metodo1();
?>