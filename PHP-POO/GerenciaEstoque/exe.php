<?php

namespace GerenciaEstoque;

require_once __DIR__ . '/autoload.php';

use GerenciaEstoque\{Desktop, Monitor, Periferico, Estoque, Menu};

$estoque = new Estoque();

function exibirMenu(){
    echo "\n";
    echo "Escolha uma das opções abaixo:\n";
    echo "1- Cadastrar um novo produto\n";
    echo "2- Listar Estoque\n";
    echo "3- Vender produto\n";
    echo "4- Atualizar produto\n";
    echo "5- Deletar produto\n";
    $opcao = readline("Digite a sua escolha: ");
    echo "\n";
    return $opcao . PHP_EOL;
}

while (true) {
$opcao = exibirMenu();

switch ($opcao){

    case 1: 
        echo "Cadastrar um novo produto\n";
        echo "1- Desktop\n";
        echo "2- Monitor\n";
        echo "3- Periférico\n";
        $resposta = readline("Digite a sua escolha: ");
        echo "\n";
        if ($resposta == 1){
            $codigoProduto = readline ("Código do produto: ");
            $nome = readline ("Nome: ");
            $quantidade = readline("Quantidade: ");
            $preco = readline ("Preço: ");
            $processador = readline ("Processador: ");
            $memoriaRam = readline("Memoria Ram: ");
            $placaDeVideo = readline ("Placa de vídeo: ");
            $produto = new Desktop($codigoProduto, $nome, $quantidade, $preco, $processador, $memoriaRam, $placaDeVideo);
            $estoque->addProduto($produto);
            echo "Produto adicionado com sucesso!" . PHP_EOL;
            break;
        } elseif ($resposta == 2){
            $codigoProduto = readline ("Código do produto: ");
            $nome = readline ("Nome: ");
            $quantidade = readline("Quantidade: ");
            $preco = readline ("Preço: ");
            $polegadas = readline("Polegadas: ");
            $marca = readline("Marca; ");
            $produto = new Monitor($codigoProduto, $nome, $quantidade, $preco, $polegadas, $marca);
            $estoque->addProduto($produto);
            echo "Produto adicionado com sucesso!" . PHP_EOL;
            break;
        } elseif ($resposta == 3){
            $codigoProduto = readline ("Código do produto: ");
            $nome = readline ("Nome: ");
            $quantidade = readline("Quantidade: ");
            $preco = readline ("Preço: ");
            $marca = readline("Marca: ");
            $modelo = readline("Modelo: ");
            $tipo = readline("Tipo: ");
            $produto= new Periferico($codigoProduto, $nome, $quantidade, $preco, $marca, $modelo, $tipo);
            $estoque->addProduto($produto);
            echo "Produto adicionado com sucesso!" . PHP_EOL;
            break;
        }

    case 2:
        echo "Listando estoque\n";
        $estoque->listarEstoque();
        break;

    case 3:
        echo "Vender produto\n";
        $codigoProduto = readline("Código do produto: ");
        $quantidade = readline("Quantidade: ");
        $estoque->venderProduto($codigoProduto, $quantidade);
        break;

    case 4:
        echo "Atualizar produto\n";
        $codigoProduto = readline("Codigo do produto: ");
        $nome = readline("Novo nome: ");
        $preco = readline("Novo preço: ");
        $estoque->atualizarProduto($codigoProduto, $nome, $preco);
        break;

    case 5: 
        echo "Deletar produto\n";
        $codigoProduto = readline("Codigo do produto: ");
        $estoque->deletarProduto($codigoProduto);
        break;
    }
}
