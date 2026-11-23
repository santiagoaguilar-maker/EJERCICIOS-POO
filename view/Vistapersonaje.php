<?php

class Vistapersonaje {

/**
 * @param Personaje $personaje 
 */
public function mostrarpersonaje (personaje $personaje){

echo $personaje->mostrarInfo() . PHP_EOL;

}
}