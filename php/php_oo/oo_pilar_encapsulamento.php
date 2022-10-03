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

    $pai = new Pai();
    echo $pai->nome;
    echo '<br>';
    echo $pai->sobrenome = 'Silva';
    echo '<br>';
    echo $pai->executarAcao();
?>