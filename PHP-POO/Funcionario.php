<?php

Class Funcionario{
    private $nome;
    private $cargo;
    private $salario;

    function __construct($nome, $cargo, $salario){
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function ajustarSalario($novoSalario){
        $this->salario = $novoSalario;
        echo "O novo salario e de: " . $this->salario . PHP_EOL;
    }

    public function alterarCargo($novoCargo){
        $this->cargo = $novoCargo;
        echo "O novo cargo sera: " . $this->cargo . PHP_EOL;
        
    }

    public function exibirDetalhes(){
        echo $this->nome . PHP_EOL;
        echo $this->cargo . PHP_EOL;
        echo $this->salario . PHP_EOL;
    }
}