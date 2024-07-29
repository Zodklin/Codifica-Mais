<?php

require 'ContaBancaria.php';


$conta1 = new ContaBancaria(1, "Guilherme");

$conta1->depositar(1000);
$conta1->depositar(-100);
$conta1->sacar(500);
$conta1->sacar(10000);
$conta1->getSaldo();