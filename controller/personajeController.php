
<?php

require_once __DIR__ . "/../model/personaje.php";
require_once __DIR__ . "/../model/Spartan.php";
require_once __DIR__ . "/../model/Sangheili.php";
require_once __DIR__ . "/../model/Brute.php";
require_once __DIR__ . "/../model/Grunts.php";

require_once __DIR__ . "/../view/Vistapersonaje.php";

class personajeController {

    private $vista;

    public function __construct(Vistapersonaje $vista) {
        $this->vista = $vista;
    }

    public function Datos() {

        $personajes = array(
            new Spartan(150, 40, 35, 100),
            new Sangheili(120, 45, 25, 200),
            new Brute(180, 50, 30, 100),
            new Grunts(100, 30, 15, 100),
        );

        foreach ($personajes as $personaje) {
            echo $personaje->mostrarInfo();
        }
    }
}
