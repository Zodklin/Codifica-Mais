<?php

namespace GerenciaEstoque;

class Produto implements ProdutoInterface{
    protected int $codigoProduto;
    protected string $nome;
    protected int $quantidade;
    protected float $preco;

    function __construct(int $codigoProduto, string $nome, int $quantidade, float $preco)
    {
        $this->codigoProduto = $codigoProduto;
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }

    public function getCodigoProduto(){
        return $this->codigoProduto;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
    
    public function limiteDesconto($percentDesconto)
    {
        
    }
}