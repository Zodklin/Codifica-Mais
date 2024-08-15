<?php

require_once __DIR__ . '/autoload.php';
use Poo01\{Retangulo,Circulo};

$retangulo1 = new Retangulo(10,10);
$retangulo1->calcularArea();

$circulo1 = new Circulo(10);
$circulo1->calcularArea();
