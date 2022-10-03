<?php

    class Pessoa{
        public $nome = null;

        function __construct($nome){
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            return 'O '. $this->__get('nome') . ' começou a correr';
        }

        function __destruct(){
            echo 'Objeto removido';
        }
    }

    $x = new Pessoa('Enzo');

    echo '<br>' . $x->__get('nome');

    echo '<br>' . $x->correr();
    echo '<br>';
    echo $unset($x);
?>