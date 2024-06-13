<?php

$funcionarios = array(
    array(
        "nome" => "Pedro",
        "salario_base" => 2500,
        "horas_extras" => 10
    ),
    array(
        "nome" => "Renata",
        "salario_base" => 3000,
        "horas_extras" => 5
    ),
    array(
        "nome" => "Sergio",
        "salario_base" => 2800,
        "horas_extras" => 8
    ),
    array(
        "nome" => "Vanessa",
        "salario_base" => 3200,
        "horas_extras" => 12
    ),
    array(
        "nome" => "Andre",
        "salario_base" => 1700,
        "horas_extras" => 0
    )
);

function calcularSalarioTotal($salarioBase, $horasExtras) {
    $valorHoraExtra = ($salarioBase / 160) * 1.5;
    $salarioTotal = $salarioBase + ($horasExtras * $valorHoraExtra);
    return $salarioTotal;
}

function listarFuncionarios($funcionarios) {
    foreach($funcionarios as $funcionario){
        $nome = $funcionario['nome'];
        $salarioBase = $funcionario['salario_base'];
        $horasExtras = $funcionario ['horas_extras'];
        $salarioTotal = calcularSalarioTotal($salarioBase, $horasExtras);
        
        echo "Nome: $nome, Salário Base: R$ $salarioBase, Horas Extras: $horasExtras, Salário Total: R$ $salarioTotal" . PHP_EOL;
    }
}

listarFuncionarios($funcionarios);