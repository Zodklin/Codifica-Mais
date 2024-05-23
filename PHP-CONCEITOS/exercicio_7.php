<?php

$res = 0;

echo "Escreva um numero: ";
$n = trim(fgets(STDIN));

for($i = 1; $i < $n; $i++){
    if ($n%$i == 0){
        $res++;
    }
}

if($res == 2){
    echo "O numero: $n e primo";
} else {
    echo "O numero: $n nao e primo";
}

