<?php

require 'Carros.php';

$carro1 = new Carro("Nissan", 2013, "Sentra");
$carro2 = new Carro("Ford", 2007, "Focus");

$carro1->acelerar("S") . PHP_EOL;
$carro2->frear();