<?php
$impares = array();

echo "Digite um numero: ";
$a = trim(fgets(STDIN));
echo "Digite outro numero: ";
$b = trim(fgets(STDIN));

if($a <= $b){
    for($i = $a; $i < $b; $i++){
        if ($i%2 != 0){
            array_push($impares, $i);
        }
    }  echo array_sum($impares);
} else {
    echo "O primeiro numero nao pode ser maior que o segundo, por favor, tente novamente.";
}

