<?php

namespace GerenciaEstoque;

class Monitor extends Produto implements ProdutoInterface{
    protected $polegadas;
    protected $marca;

    function __construct(int $codigoProduto, string $nome, int $quantidade, float $preco, float $polegadas, string $marca)
    {
        parent::__construct($codigoProduto, $nome, $quantidade, $preco);
        $this->polegadas = $polegadas;
        $this->marca = $marca;
    }

    public function getPolegadas(){
        return $this->polegadas;
    }

    public function getMarca(){
        return $this->marca;
    }
}