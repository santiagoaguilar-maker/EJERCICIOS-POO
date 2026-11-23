<?php
class personaje{
    public $vida;
    public $ataque;
    public $defensa;
    public $raza;

    public function __construct(int $vida, int $ataque, int $defensa, string $raza){
    $this->vida = $vida;
    $this->ataque= $ataque;
    $this->defensa = $defensa;
    $this->raza = $raza;

    }
    public function getVida(){
    return $this->vida;
}

public function getAtaque(){
    return $this->ataque;
}

public function getDefensa(){
    return $this->defensa;
}
public function getRaza(){
    return $this->raza;
}
 public function setVida($vida){
    $this->vida;
}

public function setAtaque($ataque){
    $this->ataque;
}

public function setDefensa($defensa){
    $this->defensa;
}
public function setRaza($raza){
    $this->raza;
}
public function mostrarInfo(){
    return "Vida: {$this->vida} | Ataque: {$this->ataque} | Defensa: {$this->defensa} | Raza: {$this->raza}";
}
}