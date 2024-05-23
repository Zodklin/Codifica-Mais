<?php

echo "Digite um numero: " . PHP_EOL;
$num1 = trim(fgets(STDIN));

echo "Digite outro numero: " . PHP_EOL;
$num2 = trim(fgets(STDIN));

$res = $num1 + $num2;

echo("A soma de $num1 e $num2 e: $res.");
