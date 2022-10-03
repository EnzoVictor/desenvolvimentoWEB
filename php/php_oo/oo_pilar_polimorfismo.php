<?php

    class Carro extends Veiculo{
        public $tetoSolar = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function ligarSom(){
            echo 'Ligando som';
        }
    }

    class Moto extends Veiculo{
        public $acessorioGuidao = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo 'Dando grau';
        }

        //Reescrevendo este método que já está sendo extendido da classe Veiculo, porém aleterando o seu output
        function trocaMarcha(){
            echo 'Desingatar a embreagem com a mão e ingatar com o pé';
        }
    }

    class Caminhao extends Veiculo{


    }

    //Classe PAI, onde todos que estiverem herdando essa classe, também herdaram os seus atributos e métodos
    class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerando';
        }

        function trocaMarcha(){
            echo 'Desingatar a embreagem com o pé e ingatar com a mão';
        }
    }


    $carro = new Carro('ABC122', 'Preto');
    $moto = new Moto('AZA4545', 'Preto');
    $caminhao = new Caminhao();

    $carro->trocaMarcha();
    echo '<br>';
    $moto->trocaMarcha();
    echo '<br>';
    $caminhao->trocaMarcha();
?>