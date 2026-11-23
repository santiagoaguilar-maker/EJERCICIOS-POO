<?php
require_once __DIR__ . "/personaje.php";
class Brute extends personaje{
    private $golpeDevastador;
    public function __construct($vida, $ataque, $defensa, $golpeDevastador){
        parent::__construct($vida, $ataque, $defensa, "Brute");
        $this->golpeDevastador = $golpeDevastador;
    }

    public function getGolpeDevastador(){
        return $this->golpeDevastador;
    }

        public function setGolpeDevastador($golpeDevastador){
       $this->golpeDevastador;
    }

    public function mostrarInfo(){
        return parent::mostrarInfo() . " | GolpeDevastador: {$this->golpeDevastador}";
    }
}