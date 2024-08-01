<?php

namespace GerenciaEstoque;

abstract class ProdutoPerecivel extends Produto implements ProdutoInterface{
    private string $dataValidade;

    function __construct(int $sku, string $nome, int $quantidade, string $unidadeDeMedida, float $preco, string $dataValidade)
    {
        parent::__construct($sku, $nome, $quantidade, $unidadeDeMedida, $preco);
        $this->dataValidade = $dataValidade;
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
        $precoComDesconto = ($percentDesconto/100) * $this->preco;
        if ($precoComDesconto < 30){
            echo "Quantidade de desconto não permitida.";
        } else $this->preco = $precoComDesconto;
        return $this->preco;
    }
}