<?php

namespace GerenciaEstoque;

class Produto implements ProdutoInterface{
    protected int $sku;
    protected string $nome;
    protected int $quantidade;
    protected string $unidadeDeMedida;
    protected float $preco;

    function __construct(int $sku, string $nome, int $quantidade, string $unidadeDeMedida, float $preco)
    {
        $this->sku = $sku;
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->unidadeDeMedida = strtoupper($unidadeDeMedida);
        $this->preco = $preco;
    }

    public function getSku(){
        echo "O SKU desse produto é: " . $this->sku;
    }

    public function getNome(){
        echo "O nome desse produto é: " . $this->nome;
    }

    public function getQuantidade(){
        echo "Esse produto tem " . $this->quantidade . "unidades";
    }

    public function getUnidadeMedida(){
        echo "A unidade de medida desse produto é: " . $this->unidadeDeMedida;
    }

    public function getPreco(){
        echo $this->preco . "R$";
    }
    
    public function promocao($percentDesconto)
    {
        
    }
}