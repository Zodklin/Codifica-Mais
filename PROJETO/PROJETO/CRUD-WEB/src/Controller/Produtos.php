<?php

namespace App;

require "helper.php";

class Produtos
{
    public function listar()
    {
        require "../public/listagem.php";
    }

    public function criar()
    {

        require "../public/adicionar.php";
    }

    public function editar($id)
    {
        $produtoSelecionado = $_SESSION['produtos'][$id -1];
        require "../public/adicionar.php";
    }

    public function atualizar($idProduto)
    {
        // echo '<pre>';
        // var_dump($_SESSION['produtos'][$idProduto - 1]);
        // echo '</pre>';
        $dadosProdutos = $_POST;
        $_SESSION['produtos'][$idProduto -1]['nome'] = $dadosProdutos['nome-item'];
        $_SESSION['produtos'][$idProduto -1]['sku'] = $dadosProdutos['SKU'];
        $_SESSION['produtos'][$idProduto -1]['unidade_medida_id'] = $dadosProdutos['unidade-medida-adicionar'];
        $_SESSION['produtos'][$idProduto -1]['valor'] = $dadosProdutos['valor'];
        $_SESSION['produtos'][$idProduto -1]['quantidade'] = $dadosProdutos['quantidade-adicionar'];
        $_SESSION['produtos'][$idProduto -1]['categoria_id'] = $dadosProdutos['categoria-adicionar'];
        // echo '<pre>';
        // var_dump($dadosProdutos);
        // echo '</pre>';
        // die();
        header('Location: /listagem');
    }

    public function salvar($dados)
    {

        $ultimoId = count($_SESSION['produtos']) + 1;
        $_SESSION['produtos'][] = [
            'id' => $ultimoId,
            'nome' => $dados['nome-item'],
            'sku' => $dados['SKU'],
            'unidade_medida_id' => $dados['unidade-medida-adicionar'],
            'valor' => $dados['valor'],
            'quantidade' => $dados['quantidade-adicionar'],
            'categoria_id' => $dados['categoria-adicionar']
        ];
        // dd($_SESSION['produtos']);
        header('Location: /listagem');
    }

    public function deletar($id)
    {
        $produtoDeletado = $id - 1;
        unset($_SESSION['produtos'][$produtoDeletado]);
        header('Location: /listagem');
    }
}
