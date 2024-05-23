<?php

echo "Escreva um numero: ";
$n = trim(fgets(STDIN));

for($i = 1; $i <= 10; $i++){
    echo $i*$n . PHP_EOL;
}
