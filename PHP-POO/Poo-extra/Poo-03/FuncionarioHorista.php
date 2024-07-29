<?php

require 'FuncionarioBase.php';

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
        $horasExtras;
    }

}