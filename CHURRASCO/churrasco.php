<?php

$itens = ["carne", "cerveja", "agua", "refrigerante", "utilitários"];
$preco = [600, 800, 150, 350, 100];

function divisao($preco, $participantes){
    $precoTotal = array_sum($preco);
    $precoCada = $precoTotal / $participantes;
    return $precoCada;
}

echo "Digite o total de participantes: ";
$participantes = (int)trim(fgets(STDIN));
if ($participantes > 1){
    $precoCada = divisao($preco, $participantes);

    echo "O preço que cada participante deve pagar é $precoCada" . PHP_EOL;
    $maiorValor = max($preco);
    $indiceMaiorValor = array_search($maiorValor, $preco);
    $itemMaiorValor = $itens[$indiceMaiorValor];

    echo "O item de maior valor é: $itemMaiorValor , e o preço dele é: $maiorValor";
};