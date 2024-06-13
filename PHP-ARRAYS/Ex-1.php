<?php

$numeros = array();


for ($i = 0; $i < 10; $i++){
    echo "Escreva 10 numeros: ";
    $numeros[$i] = intval(trim(fgets(STDIN)));
}

echo "O menor numero e: ", min($numeros) . PHP_EOL;
echo "O maior numnero e: ", max($numeros);