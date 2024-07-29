<?php

namespace Poo03;

class FuncionarioMensalista extends FuncionarioBase{
    public function calcularSalario(){
        return $this->salarioBase;
    }

    public function exibirInformacoes()
    {
        echo $this->nome . PHP_EOL;
        echo $this->salarioBase . PHP_EOL;
    }
}