<?php

    class Funcionario{

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //Getters / Setters
        function setNome($nome){
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function getNome(){
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }

        function getTelefone(){
            return $this->telefone;
        }

        //Métodos
        function resumoCadFunc(){
            if ($this->telefone != null){
                return "$this->nome do número $this->telefone de celular, tem $this->numFilhos filho(s)";
            } else {
                return "$this->nome, tem $this->numFilhos filho(s)";
            }
        }

        function alterarNumFilhos($numFilhos){
            //Apenas uma ação que altera um atributos
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();

    echo $y->resumoCadFunc();

    $y->setNome('Enzo');
    $y->setNumFilhos(1);
    $y->setTelefone('19 987169554');

    echo '<br>';

    echo $y->resumoCadFunc();
?>