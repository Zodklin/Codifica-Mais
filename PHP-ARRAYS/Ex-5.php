<?php

$num = array();
$dobro = array();
$n = 0;

for ($i = 0; $i <= 5; $i++){
    echo "Escreva um numero: ";
    $num[$n] = trim(fgets(STDIN));
    $dobro[$n] = $num[$n]*2;
    $n++;
}

print_r ($num) . PHP_EOL;
print_r ($dobro);
