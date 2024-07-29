<?php

require 'Funcionario.php';

class FuncionarioBase implements Funcionario{
    protected $salarioBase;
    protected $nome;

    function __construct($nome, $salarioBase)
    {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    public function calcularSalario()
    {
        
    }

    public function exibirInformacoes()
    {
        
    }
}