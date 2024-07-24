<?php

class Produto{
    private $nome;
    private $preco;
    private $qtEstoque;

    function __construct($nome, $preco, $qtEstoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->qtEstoque = $qtEstoque;
    }

    public function alterarPreco($novoPreco){
        if ($novoPreco <= 0){
            echo "Não é possível alterar para este preço.";
        } else if ($novoPreco == $this->preco){
            echo "Não é possível alterar o preço para o mesmo valor.";
        } else {
            $this->preco = $novoPreco;
            echo "Preço alterado com sucesso!" . PHP_EOL;
        } 
        echo "Novo preço é de: " . $this->preco . "R$" . PHP_EOL;
    } 

    public function ajustarEstoque($quantidade, $tipo){
        if ($tipo == "-"){
            if($quantidade > $this->qtEstoque){
                echo "Quantidade em estoque indisponível" . PHP_EOL;
            } else {
                $this->qtEstoque -= $quantidade;
                echo "Estoque atual: " . $this->qtEstoque . PHP_EOL;
            }
        } else if ($tipo == "+"){
            if ($quantidade <= 0){
                echo "Não é possível adicionar essa quantidade." . PHP_EOL;
            } else {
                $this->qtEstoque += $quantidade;
                echo "Estoque atual: " . $this->qtEstoque . PHP_EOL;
            } 
        } else {
            echo "Opção não disponível";
        }
    }

    public function exibirDetalhes(){
        echo $this->nome . PHP_EOL;
        echo $this->preco . PHP_EOL; 
        echo $this->qtEstoque . PHP_EOL; 
    }
}