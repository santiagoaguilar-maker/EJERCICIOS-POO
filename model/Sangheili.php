<?php
require_once __DIR__ . "/personaje.php";
class Sangheili extends personaje{
    private $espadadeEnergia;
    public function __construct($vida, $ataque, $defensa, $espadadeEnergia,){
        parent::__construct($vida, $ataque, $defensa, "Sangheili");
        $this->espadadeEnergia = $espadadeEnergia;
    }

    public function getEspadadeEnergia(){
        return $this->espadadeEnergia;
    }

        public function setEspadadeEnergia($espadadeEnergia){
       $this->espadadeEnergia;
    }

    public function mostrarInfo(){
        return parent::mostrarInfo() . " | EspadadeEnergia: {$this->espadadeEnergia}";
    }
}