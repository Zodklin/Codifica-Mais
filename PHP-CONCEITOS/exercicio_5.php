<?php

echo "Escolha um numero: ";
$num = trim(fgets(STDIN));

$res = $num%2;
if($res == 0){
    echo"O numero: $num e par";
} else {
    echo "O numero: $num e impar";
}
