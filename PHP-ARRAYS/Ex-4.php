<?php

$numeros = array();
$n = 0; 

for ($i = 0; $i <= 4; $i++){
    echo "Escreva um numero: ";
    $numeros[$n] = trim(fgets(STDIN));
    $n++;
}

for ($i = 4; $i >= 0; $i--){
   echo ($numeros[$i]. PHP_EOL);
}