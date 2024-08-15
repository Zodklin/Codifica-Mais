<?php

namespace GerenciaEstoque;

class Periferico extends Produto implements ProdutoInterface{
    protected string $marca;
    protected string $modelo;
    protected string $tipo;

    function __construct(int $codigoProduto, string $nome, int $quantidade, float $preco, string $marca, string $modelo, string $tipo)
    {
        parent::__construct($codigoProduto, $nome, $quantidade, $preco);
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tipo = $tipo;
        
    }

    public function limiteDesconto($percentDesconto)
    {
        $precoComDesconto = ($percentDesconto/100) * $this->preco;
        if ($precoComDesconto < 50){
           echo "Quantidade de desconto não permitida.";
       } else $this->preco = $precoComDesconto;
        return $this->preco;
    }

    public function getMarca(){
        return $this->marca;
    }
    
    public function getModelo(){
        return $this->modelo;
    }

    public function getTipo(){
        return $this->tipo;
    }
}