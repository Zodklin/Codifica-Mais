<?php

namespace App;

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

    public function salvar(array $dados, $id)
    {
        foreach ($_SESSION['produtos'] as $produto) {
            if ($produto['id'] == $id) {
                $produto['nome'] = $dados['nome-item'];
                $produto['sku'] = $dados['SKU'];
                $produto['unidade_medida_id'] = $dados['unidade-medida-adicionar'];
                $produto['valor'] = $dados['valor'];
                $produto['quantidade'] = $dados['quantidade-adicionar'];
                $produto['categoria_id'] = $dados['categoria-adicionar'];
                break;
            }
        }
    }

    public function deletar($id)
    {
        foreach ($_SESSION['produtos'] as $ind => $produto){
            if ($produto['id'] == $id){
                unset($_SESSION['produtos'][$ind]);
            }
        }
    }
}
