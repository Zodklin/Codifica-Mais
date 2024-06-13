<?php

echo "Escolha um número: ";
$num = trim(fgets(STDIN));

for ($i = 1; $i <= 10; $i++){
    echo "A multiplicação de $num x $i é: ", $i*$num . PHP_EOL;
}
