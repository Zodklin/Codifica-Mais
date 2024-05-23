<?php

echo "Qual a sua idade? " . PHP_EOL;
$idade = trim(fgets(STDIN));

if ($idade >= 18){
    echo "Voce e de maior";
} else {
    echo "Voce e de menor";
}


