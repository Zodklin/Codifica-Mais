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
        $_SESSION['produtos'][] = [
            'id' => 3,
            'nome' => $dados['nome-item'],
            'sku' => $dados['SKU'],
            'unidade_medida_id' => $dados['unidade'],
            'valor' => $dados['valor'],
            'quantidade' => $dados['quantidade-adicionar'],
            'categoria_id' => '1',
        ]
    }
}
