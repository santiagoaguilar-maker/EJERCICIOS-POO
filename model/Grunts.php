<?php
require_once __DIR__ . "/personaje.php";
class Grunts extends personaje{
    private $granadadePlasma;
    public function __construct($vida, $ataque, $defensa, $granadadePlasma){
        parent::__construct($vida, $ataque, $defensa, "Grunts");
        $this->granadadePlasma = $granadadePlasma;
    }

    public function getGranadadePlasma(){
        return $this->granadadePlasma;
    }

        public function setGranadadePlasma($granadadePlasma){
       $this->granadadePlasma;
    }

    public function mostrarInfo(){
        return parent::mostrarInfo() . " | GranadadePlasma: {$this->granadadePlasma}";
    }
}