<?php
namespace App;

class Produtos
{
    public function listar()
    {
        $pdo = new \PDO('mysql:host=localhost;dbname=controle_estoque', 'root', '@Zodklin2701');
        $sql1 = "SELECT
                    p.id AS produtoId,
                    p.nome AS produtoNome,
                    p.sku AS produtoSku,
                    p.valor AS produtoValor,
                    p.quantidade AS produtoQuantidade,
                    p.categoria_id AS produtoCategoriaId,
                    u.id AS unidadeId,
                    u.nome AS unidadeNome,
                    c.id AS categoriaId,
                    c.nome AS categoriaNome
                FROM
                    produto p 
                INNER JOIN 
                    categoria c ON p.categoria_id = c.id
                INNER JOIN 
                    unidade_medida u ON p.unidade_medida_id = u.id";
        $statement = $pdo->query($sql1);
        $produtos = $statement->fetchAll(\PDO::FETCH_ASSOC);
        require "../public/listagem.php"; 
    }
    

    public function criar()
    {
        require "../public/adicionar.php";
    }

    public function editar($id)
    {   
        $pdo = new \PDO('mysql:host=localhost;dbname=controle_estoque', 'root', '@Zodklin2701');
        $sql1 = "SELECT
                    p.id AS produtoId,
                    p.nome AS produtoNome,
                    p.sku AS produtoSku,
                    p.valor AS produtoValor,
                    p.quantidade AS produtoQuantidade,
                    p.categoria_id AS produtoCategoriaId,
                    u.id AS unidadeId,
                    u.nome AS unidadeNome,
                    c.id AS categoriaId,
                    c.nome AS categoriaNome
                FROM
                    produto p 
                INNER JOIN 
                    categoria c ON p.categoria_id = c.id
                INNER JOIN 
                    unidade_medida u ON p.unidade_medida_id = u.id
                WHERE 
                    p.id = $id";
        $statement = $pdo->query($sql1);
        $produto = $statement->fetchAll(\PDO::FETCH_ASSOC);
        $produtoSelecionado = $produto[0];
        require "../public/adicionar.php";
    }

    public function atualizar($idProduto)
    {
        $dadosProdutos = $_POST;
        $pdo = new \PDO('mysql:host=localhost;dbname=controle_estoque', 'root', '@Zodklin2701');
        $update = "UPDATE produto SET nome = ?, sku = ?, unidade_medida_id = ?, valor = ?, quantidade = ?, categoria_id = ? WHERE id = ?";
        $statement = $pdo->prepare($update);
        $statement->bindValue(1, $dadosProdutos['nome-item']);
        $statement->bindValue(2, $dadosProdutos['SKU']);
        $statement->bindValue(3, $dadosProdutos['unidade-medida-adicionar']);
        $statement->bindValue(4, $dadosProdutos['valor']);
        $statement->bindValue(5, $dadosProdutos['quantidade-adicionar']);
        $statement->bindValue(6, $dadosProdutos['categoria-adicionar']);
        $statement->bindValue(7, $idProduto);
        $statement->execute();

        header('Location: /listagem');
    }

    public function salvar($dados)
    {
        $pdo = new \PDO('mysql:host=localhost;dbname=controle_estoque', 'root', '@Zodklin2701');
        $insert = "INSERT INTO produto (nome, sku, unidade_medida_id, valor, quantidade, categoria_id) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $pdo->prepare($insert);
        $statement->bindValue(1, $dados['nome-item']);
        $statement->bindValue(2, $dados['SKU']);
        $statement->bindValue(3, $dados['unidade-medida-adicionar']);
        $statement->bindValue(4, $dados['valor']);
        $statement->bindValue(5, $dados['quantidade-adicionar']);
        $statement->bindValue(6, $dados['categoria-adicionar']);
        $statement->execute();
        header('Location: /listagem');
    }

    public function deletar($id)
    {
        $pdo = new \PDO('mysql:host=localhost;dbname=controle_estoque', 'root', '@Zodklin2701');
        $delete = "DELETE FROM produto WHERE id = ?";
        $statement = $pdo->prepare($delete);
        $statement->bindValue(1, $id);
        $statement->execute();
        header('Location: /listagem');
    }
}
