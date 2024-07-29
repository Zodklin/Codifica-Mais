<?php

$pares = array();
$n = 0;

for ($i = 0; $i < 5; $i++){
    echo "Escreva um número: ";
    $num = trim(fgets(STDIN));
    
    if ($num%2 == 0){
        $pares[$n] = $num;
        $n++;
    }
}

print_r ($pares);

?>