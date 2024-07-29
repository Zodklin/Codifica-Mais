<?php

echo "Qual a temperatura? ";
$temp = (int)trim(fgets(STDIN));
$uni = null;

while ($uni != 1 && $uni != 2){
echo "Qual a unidade de medida deseja que seja convertido?" . PHP_EOL;
echo "1 - Celsius para Fahrenheit" . PHP_EOL;
echo "2 - Fahrenheit para Celsius" . PHP_EOL;
$uni = (int)trim(fgets(STDIN));
    if ($uni != 1 && $uni !=2){
        echo "Isso não é uma opção válida, por favor, recomece." . PHP_EOL;
    }
}

if ($uni === 1){
    $convertido = ($temp * 9/5) + 32;
    echo "Temperatura: $temp °C" . PHP_EOL;
    echo "Temperatura em Fahrenheit: $convertido °F";
} else if ($uni === 2){
    $convertido = ($temp - 32) * 5/9;
    echo "Temperatura: $temp °F" . PHP_EOL;
    echo "Temperatura em Celsius: $convertido °C";
}

