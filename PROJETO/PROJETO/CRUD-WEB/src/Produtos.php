<?php

namespace App;

class Produtos
{
    public function listar()
    {
        return $_SESSION['produtos'];
    }

    public function criar(array $dados)
    {
        $ultimo = end($_SESSION['produtos']);

        $ultimoId = $ultimo['id'] + 1;

        $_SESSION['produtos'][] = [
            'id' => $ultimoId,
            'nome' => $dados['nome-item'],
            'sku' => $dados['SKU'],
            'unidade_medida_id' => $dados['unidade'],
            'valor' => $dados['valor'],
            'quantidade' => $dados['quantidade-adicionar'],
            'categoria_id' => 3,
        ];
    }

    public function editar($id)
    {
       foreach ($_SESSION['produtos'] as $produto){
            if ($produto['id'] == $id){
                return $produto;
            }
       }
    }

    public function salvar(array $dados, string $id){
        foreach ($_SESSION['produtos'] as &$produto){
            if ($produto['id'] == $id){
                $produto['nome'] = $dados['nome-item'];
                $produto['sku'] = $dados['SKU'];
                $produto['unidade_medida_id'] = $dados['unidade'];
                $produto['valor'] = $dados['valor'];
                $produto['quantidade'] = $dados['quantidade-adicionar'];
            }
        }
     }
}
