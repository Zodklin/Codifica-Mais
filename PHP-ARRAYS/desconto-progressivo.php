<?php

function aplicarDesconto($valorCompra, $percentualDesconto){
    $valorDesconto = ($percentualDesconto/100) * $valorCompra;
    $valorComDesconto = $valorCompra - $valorDesconto;
    return $valorComDesconto;
}

function calcularDescontoProgressivo($valorCompra){
    if($valorCompra <= 100){
        $percentualDesconto = 0;
    } elseif ($valorCompra > 100 && $valorCompra <= 500){
        $percentualDesconto = 10;
    } else {
        $percentualDesconto = 20;
    }
    return $percentualDesconto;
}

echo "Digite o valor da compra: ";
$valorCompra = (int)trim(fgets(STDIN));

$percentualDesconto = calcularDescontoProgressivo($valorCompra);

$valorComDesconto = aplicarDesconto($valorCompra, $percentualDesconto);

$valorDesconto = $valorCompra-$valorComDesconto;

if ($valorCompra > 100){
    echo "A compra teve o valor de $valorCompra R$, a mesma recebeu o desconto de $percentualDesconto %, o valor da compra com o desconto ficou em $valorComDesconto R$" . PHP_EOL;
    echo "Você recebeu um desconto de $valorDesconto R$!";
} else {
    echo "A compra teve o valor de $valorCompra R$, por esse motivo você não obteve desconto. (Valor mínimo para desconto: 101R$)";
}