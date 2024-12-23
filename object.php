<?php

    class Passaro{
        public $cor;
        public $raca;
        public $nativo;
        public function __construct($cor, $raca, $nativo){
            $this->cor = $cor;
            $this->raca = $raca;
            $this->nativo = $nativo;
        }
        public function menssagem(){
            return "O passaro é da cor $this->cor,  raça $this->raca e nativo do(a) $this->nativo";
        }
    }

    $passaro = new Passaro("vermelha","Godero","Brasil");
    echo $passaro->menssagem();

?>