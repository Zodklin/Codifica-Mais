<?php

namespace Poo03;

class FuncionarioHorista extends FuncionarioBase{
    protected $horasExtras;

    function __construct($nome, $salarioBase, $horasExtras)
    {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
        $this->horasExtras = $horasExtras;
    }

    public function calcularSalario()
    {
        $valorHora = $this->salarioBase / 220;
        $valorHorasExtras = $valorHora * $this->horasExtras;
        $valorFinal = ($valorHorasExtras * 1.5) + $this->salarioBase;
        return number_format($valorFinal,2,",", "."); 
    }

    public function exibirInformacoes()
    {
        echo "-----------------------------------" . PHP_EOL;
        echo $this->nome . PHP_EOL;
        echo $this->salarioBase . PHP_EOL;
        echo $this->calcularSalario() . PHP_EOL;
        echo "-----------------------------------" . PHP_EOL;
    }
}

