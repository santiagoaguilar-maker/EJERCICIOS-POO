<?php

require_once __DIR__ . "/controller/personajeController.php";
require_once __DIR__ . "/view/Vistapersonaje.php";

$vista = new Vistapersonaje();
$controller = new personajeController($vista);

$controller->Datos();