<?php

$numeros = array();
$i = 0;

while($i != -1){
    echo "Digite um numero: (ou -1 para terminar)" . PHP_EOL;
    $i = trim(fgets(STDIN));
    if($i == -1){
        break;
    }
    array_push($numeros, $i);
}

echo "O menor numero e: ", min($numeros) . PHP_EOL;
echo "O maior numnero e: ", max($numeros);
