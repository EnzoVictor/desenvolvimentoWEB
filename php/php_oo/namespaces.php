<?php

    namespace A;
    class Cliente implements metodoEficiente{
        public $nome = 'Enzo';

        function __construct(){
            echo '<pre>';
            echo print_r(get_class_methods($this));
            echo '</pre>';
        }

        function __get($atr){
            return $this->$atr;
        }

        function remover(){
            echo 'removido';
        }
    }

    interface metodoEficiente{
        function remover();
    }

    namespace B;
    class Cliente implements metodoEficiente{
        public $nome = 'Tiago';

        function __construct(){
            echo '<pre>';
            echo print_r(get_class_methods($this));
            echo '</pre>';
        }

        function __get($atr){
            return $this->$atr;
        }

        function salvar(){
            echo 'salvo';
        }
    }

    interface metodoEficiente{
        function salvar();
    }

    $cliente = new \A\Cliente();

    echo '<pre>';
    echo print_r($cliente);
    echo '</pre>';

    echo $cliente->__get('nome');
?>