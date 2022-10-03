<?php

    class Pai{
        private $nome = 'Enzo';
        protected $sobrenome = 'Santana';
        public $humor = 'Feliz';
        public function __get($atr){
            return $this->$atr;
        }

        public function __set($atributo, $value){
            $this->$atributo = $value;
        }

        private function executarMania(){
            return 'Assobiar';
        }

        protected function responder(){
            return 'Opa!';
        }

        public function executarAcao(){
            $x = rand(1, 12);
            if ($x > 1 && $x < 8){
                return $this->executarMania();
            } else {
                return $this->responder();
            }
        }
    }

    class Filho extends Pai {
        //Os atributos privados da classe Pai, não podem ser visualizados pela classe filha. Porém, com os métodos
        //mágicos __set ou __get, é possível capturar os atributos privados

        /*
        function getAtributo($atributo){
            return $this->$atributo;
        }

        function setAtributo($atributo, $valor){
            // Quando setamos um novo atributo, ele cria este atributo em sua respectiva classe
            $this->$atributo = $valor;
        }
        */
    }

    $filho = new Filho();

    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    echo '<br>';

    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';

    echo '<br>';

    echo $filho->executarAcao();
    /*

    TENTANDO CAPTURAR O ATRIBUTO PRIVADO DA CLASSE PAI

    echo $filho->getAtributo('nome');
    $filho->setAtributo('nome', 'Tiago');
    echo '<br>';
    echo $filho->getAtributo('nome');

    echo '<pre>';
    print_r($filho);
    echo '</pre>';
    */
?>