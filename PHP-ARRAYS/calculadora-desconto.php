<?php

function desc($valor, $desconto){
    $valorDesconto = ($desconto / 100) * $valor;
    $valorFim = $valor - $valorDesconto;
    return $valorFim;
}

echo "Qual o valor do produto? ";
$valor = (int)trim(fgets(STDIN));
echo "Qual a % do desconto? ";
$desconto = (int)trim(fgets(STDIN));

$valorFinal = desc($valor, $desconto);

echo "O valor final com desconto é: $valorFinal R$";