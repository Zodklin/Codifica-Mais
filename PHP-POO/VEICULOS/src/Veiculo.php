<?php

namespace VEICULOS\src;

abstract class Veiculo{
    protected $nome;
    protected $modelo;
    protected $ano;
    protected $rodas = 0;
    
    function __construct($nome, $modelo, $ano){
        $this->nome = $nome;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
    
    public function ligar(){
        echo "O veículo foi ligado";
    }

    public function desligar(){
        echo "O veículo foi desligado";
    }

    public function rodas($rodas){
        
    }

    abstract public function exibirDetalhes();

    
}

    