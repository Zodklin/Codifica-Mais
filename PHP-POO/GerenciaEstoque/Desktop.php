<?php

namespace GerenciaEstoque;
require_once __DIR__ . '/autoload.php';

class Desktop extends Produto implements ProdutoInterface{
    protected string $processador;
    protected string $memoriaRam;
    protected string $placaDeVideo;

    function __construct(int $codigoProduto, string $nome, int $quantidade, float $preco, string $processador, string $memoriaRam, string $placaDeVideo)
    {
        parent::__construct($codigoProduto, $nome, $quantidade, $preco); 
        $this->processador = $processador;
        $this->memoriaRam = $memoriaRam;
        $this->placaDeVideo = $placaDeVideo;
    }

    public function limiteDesconto($percentDesconto)
     {
         $precoComDesconto = ($percentDesconto/100) * $this->preco;
         if ($precoComDesconto < 1500){
            echo "Quantidade de desconto não permitida.";
        } else $this->preco = $precoComDesconto;
         return $this->preco;
     }

     public function getProcessador(){
        return $this->processador;
     }

     public function getMemoriaRam(){
         return $this->memoriaRam;
     }

     public function getPlacaDeVideo(){
         return $this->placaDeVideo;
     }
}