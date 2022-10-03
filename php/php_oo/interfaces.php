<?php
    interface TodoerVivoFaz{
        function comer();
    }

    interface Pessoa extends TodoerVivoFaz{
        function andar();
        function falar();
    }

    interface Cobra{
        function rastejar();
        function visaoInfraVermelho();
    }

    class Humano implements Pessoa {
        function andar(){
            echo 'Andando';
        }

        function falar(){
            echo 'Falando';
        }

        function comer(){
            echo 'comendo';
        }
    }
?>