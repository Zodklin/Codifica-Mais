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
        // $ultimo = end($_SESSION['produtos']);
        // $ultimoId = $ultimo['id'] + 1;

        // $_SESSION['produtos'][] = [
        //     'id' => $ultimoId,
        //     'nome' => $dados['nome-item'],
        //     'sku' => $dados['SKU'],
        //     'unidade_medida_id' => $dados['unidade-medida-adicionar'],
        //     'valor' => $dados['valor'],
        //     'quantidade' => $dados['quantidade-adicionar'],
        //     'categoria_id' => $dados['categoria-adicionar'],
        // ];
    }

    public function editar($id)
    {
        $produtoSelecionado = $_SESSION['produtos'][$id -1];
        var_dump($produtoSelecionado);
        require "../public/adicionar.php";
    }

    public function salvar(array $dados, $id)
    {
        foreach ($_SESSION['produtos'] as &$produto) {
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
