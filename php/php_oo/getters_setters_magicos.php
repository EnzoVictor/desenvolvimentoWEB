<?php
    class Funcionario{

        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function resumoFuncionario(){
            return "$this->nome, do telefone $this->telefone tem $this->numFilhos filho(s) e exerce o cargo de $this->cargo com o salário de $this->salario";

        }
    }

    $y = new Funcionario();

    $y->__set('nome', 'Enzo');
    $y->__set('telefone', '19 98888-888');
    $y->__set('numFilhos', 0);
    $y->__set('cargo', 'Músico');
    $y->__set('salario', '100.000,00');

    echo $y->resumoFuncionario();

    echo '<br>';

    echo $y->__get('salario');
?>