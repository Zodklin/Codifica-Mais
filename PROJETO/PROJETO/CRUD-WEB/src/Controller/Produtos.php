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
        $produtoSelecionado = $_SESSION['produtos'][$id];
        require "../public/adicionar.php";
    }

    public function atualizar($idProduto)
    {
        $dadosProdutos = $_POST;
        $_SESSION['produtos'][$idProduto]['nome'] = $dadosProdutos['nome-item'];
        $_SESSION['produtos'][$idProduto]['sku'] = $dadosProdutos['SKU'];
        $_SESSION['produtos'][$idProduto]['unidade_medida_id'] = $dadosProdutos['unidade-medida-adicionar'];
        $_SESSION['produtos'][$idProduto]['valor'] = $dadosProdutos['valor'];
        $_SESSION['produtos'][$idProduto]['quantidade'] = $dadosProdutos['quantidade-adicionar'];
        $_SESSION['produtos'][$idProduto]['categoria_id'] = $dadosProdutos['categoria-adicionar'];

        header('Location: /listagem');
    }

    public function salvar($dados)
    {

        $ultimoId = count($_SESSION['produtos']) + 1;
        $_SESSION['produtos'][$ultimoId] = [
            'id' => $ultimoId,
            'nome' => $dados['nome-item'],
            'sku' => $dados['SKU'],
            'unidade_medida_id' => $dados['unidade-medida-adicionar'],
            'valor' => $dados['valor'],
            'quantidade' => $dados['quantidade-adicionar'],
            'categoria_id' => $dados['categoria-adicionar']
        ];

        header('Location: /listagem');
    }

    public function deletar($id)
    {
        unset($_SESSION['produtos'][$id]);
        header('Location: /listagem');
    }
}
