<?php
namespace App;

class Produtos
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = ConexaoBD::createConnection();
    }
    
    public function listar()
    {;
        $sql1 = "SELECT p.id AS produtoId, p.nome AS produtoNome, p.sku AS produtoSku, p.valor AS produtoValor, p.quantidade AS produtoQuantidade, p.categoria_id AS produtoCategoriaId, u.id AS unidadeId, u.nome AS unidadeNome, c.id AS categoriaId, c.nome AS categoriaNome FROM produto p INNER JOIN categoria c ON p.categoria_id = c.id INNER JOIN unidade_medida u ON p.unidade_medida_id = u.id";
        $statement = $this->conexao->query($sql1);
        $produtos = $statement->fetchAll(\PDO::FETCH_ASSOC);
        require "../public/listagem.php"; 
    }
    

    public function criar()
    {
        require "../public/adicionar.php";
    }

    public function editar($id)
    {   
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
        $statement = $this->conexao->query($sql1);
        $produto = $statement->fetchAll(\PDO::FETCH_ASSOC);
        $produtoSelecionado = $produto[0];
        require "../public/adicionar.php";
    }

    public function atualizar($idProduto)
    {
        $dadosProdutos = $_POST;
        $update = "UPDATE produto SET nome = ?, sku = ?, unidade_medida_id = ?, valor = ?, quantidade = ?, categoria_id = ? WHERE id = ?";
        $statement = $this->conexao->prepare($update);
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
        var_dump(!empty($_FILES['imagem']['name']));
        die();
        if(isset($_FILES['imagem'])){
            $caminhoImagem = "C:\Users\idcap\OneDrive\Área de Trabalho\Guilherme Costa\Codifica-Mais\PROJETO\PROJETO\CRUD-WEB\uploads\ " . $_FILES['imagem']['name'];
            move_uploaded_file(from: $_FILES['imagem']['tmp_name'], to: $caminhoImagem);
        } else {
            $caminhoImagem = "C:\Users\idcap\OneDrive\Área de Trabalho\Guilherme Costa\Codifica-Mais\PROJETO\PROJETO\CRUD-WEB\uploads\imagem-padrao.jpg";
        }

        $insert = "INSERT INTO produto (nome, sku, unidade_medida_id, valor, quantidade, categoria_id, imagem) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $this->conexao->prepare($insert);
        $statement->bindValue(1, $dados['nome-item']);
        $statement->bindValue(2, $dados['SKU']);
        $statement->bindValue(3, $dados['unidade-medida-adicionar']);
        $statement->bindValue(4, $dados['valor']);
        $statement->bindValue(5, $dados['quantidade-adicionar']);
        $statement->bindValue(6, $dados['categoria-adicionar']);
        if (isset($_FILES['imagem'])){
            $statement->bindValue(7, $caminhoImagem);
        } else {
            $statement->bindValue(7, $caminhoImagem);
        }
        $statement->execute();
            
        header('Location: /listagem');
    }

    public function deletar($id)
    {
        $delete = "DELETE FROM produto WHERE id = ?";
        $statement = $this->conexao->prepare($delete);
        $statement->bindValue(1, $id);
        $statement->execute();
        header('Location: /listagem');
    }


}
