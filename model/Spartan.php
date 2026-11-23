<?php
require_once __DIR__ . "/personaje.php";
class Spartan extends personaje{
    private $rifledeAsalto;
    public function __construct($vida, $ataque, $defensa, $rifledeAsalto){
        parent::__construct($vida, $ataque, $defensa, "Spartan");
        $this->rifledeAsalto = $rifledeAsalto;
    }

    public function getRifledeAsalto(){
        return $this->rifledeAsalto;
    }

        public function setRifledeAsalto($rifledeAsalto){
       $this->rifledeAsalto;
    }

    public function mostrarInfo(){
        return parent::mostrarInfo() . " | RifledeAsalto: {$this->rifledeAsalto}";
    }
}