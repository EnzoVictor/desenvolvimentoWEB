<?php

    class Carro extends Veiculo{
        public $tetoSolar = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function ligarSom(){
            echo 'som ligado';
        }
    }

    class Moto extends Veiculo{
        public $contraPesoGuidao = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo 'Empinando';
        }
    }

    class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerando';
        }
    }


    $carro = new Carro('DXS1213', 'Preto');
    $moto = new Moto('ASX1122', 'Vermelha');

    echo '<pre>';
    print_r($carro);
    echo '</pre>';

    echo '<br>';

    echo '<pre>';
    print_r($moto);
    echo '</pre>';

    echo '<br>';

    $carro->acelerar();
?>