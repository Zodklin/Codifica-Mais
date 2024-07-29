<?php

namespace Poo03;

abstract class FuncionarioBase implements Funcionario{
    protected $salarioBase;
    protected $nome;

    function __construct($nome, $salarioBase)
    {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    abstract function calcularSalario();

    abstract function exibirInformacoes();

}