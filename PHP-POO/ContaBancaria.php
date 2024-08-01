<?php

class ContaBancaria{
    private string $numeroConta;
    private string $nomeTitular;
    private float $saldo = 0;


     function __construct($numeroConta, $nomeTitular){
        $this->numeroConta = $numeroConta;
        $this->nomeTitular = $nomeTitular;
     }

     public function depositar($quantia){
        if($quantia < 0){
            echo "Ops, não é possível depoistar esse valor." . PHP_EOL;
        } else {
            $this->saldo += $quantia;
            echo "Depósito efetuado, saldo atual é de: " . $this->saldo . "R$" . PHP_EOL;
        }
     }

     public function sacar($quantia){
        if ($quantia > $this->saldo){
            echo "Saldo insuficiente." . PHP_EOL;
        } else {
            $this->saldo -= $quantia;
            echo "Saque realizado com sucesso! Novo saldo: " . $this->saldo . "R$" . PHP_EOL;
        }
     }

     public function getSaldo(){
        echo "O saldo atual é de: " . $this->saldo . "R$"; 
     }
}

$conta1 = new ContaBancaria(1, "Guilherme");
