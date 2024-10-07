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
        $sql1 = "SELECT p.id AS produtoId, p.nome AS produtoNome, p.sku AS produtoSku, p.valor AS produtoValor, p.quantidade AS produtoQuantidade, p.categoria_id AS produtoCategoriaId, u.id AS unidadeId, u.nome AS unidadeNome, c.id AS categoriaId, c.nome AS categoriaNome, p.imagem as imagem FROM produto p INNER JOIN categoria c ON p.categoria_id = c.id INNER JOIN unidade_medida u ON p.unidade_medida_id = u.id";
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
        $diretorioUploads = 'C:/Users/guilherme.costa/Desktop/IDCAP/Codifica-Mais/PROJETO/PROJETO/CRUD-WEB/public/uploads/';
        if (!empty($_FILES['imagem']['name'])) {
            $size = $_FILES['imagem']['size'];
            if ($size > 20480000){
                $msgSuperior = "Imagem superior a 2MB, por favor escolha outra imagem.";
                $caminhoImagem = "/uploads/imagem-padrao.jpg";
            } else {
                $nomeArquivo = $_FILES['imagem']['name'];
                $caminhoImagem =  "/uploads/" . $nomeArquivo;
                move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorioUploads . $nomeArquivo);
            }
        } else {
            $caminhoImagem = "/uploads/imagem-padrao.jpg"; 
        }

        if (!empty($msgSuperior)) {
            echo "<script>alert('$msgSuperior'); window.history.back();</script>";
            exit();
        }

        $update = "UPDATE produto SET nome = ?, sku = ?, unidade_medida_id = ?, valor = ?, quantidade = ?, categoria_id = ?, imagem = ? WHERE id = ?";
        $statement = $this->conexao->prepare($update);
        $statement->bindValue(1, $dadosProdutos['nome-item']);
        $statement->bindValue(2, $dadosProdutos['SKU']);
        $statement->bindValue(3, $dadosProdutos['unidade-medida-adicionar']);
        $statement->bindValue(4, $dadosProdutos['valor']);
        $statement->bindValue(5, $dadosProdutos['quantidade-adicionar']);
        $statement->bindValue(6, $dadosProdutos['categoria-adicionar']);
        $statement->bindValue(7, $caminhoImagem);
        $statement->bindValue(8, $idProduto);
        $statement->execute();

        header('Location: /listagem');
    }

    public function salvar($dados)
    {
        $diretorioUploads = 'C:/Users/guilherme.costa/Desktop/IDCAP/Codifica-Mais/PROJETO/PROJETO/CRUD-WEB/public/uploads/';
        if (!empty($_FILES['imagem']['name'])) {
            $size = $_FILES['imagem']['size'];
            if ($size > 20480000){
                $msgSuperior = "Imagem superior a 2MB, por favor escolha outra imagem.";
                $caminhoImagem = "/uploads/imagem-padrao.jpg";
            } else {
                $nomeArquivo = $_FILES['imagem']['name'];
                $caminhoImagem =  "/uploads/" . $nomeArquivo;
                move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorioUploads . $nomeArquivo);
            }
        } else {
            $caminhoImagem = "/uploads/imagem-padrao.jpg"; 
        }

        if (!empty($msgSuperior)) {
            echo "<script>alert('$msgSuperior'); window.history.back();</script>";
            exit();
        }

        $insert = "INSERT INTO produto (nome, sku, unidade_medida_id, valor, quantidade, categoria_id, imagem) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $this->conexao->prepare($insert);
        $statement->bindValue(1, $dados['nome-item']);
        $statement->bindValue(2, $dados['SKU']);
        $statement->bindValue(3, $dados['unidade-medida-adicionar']);
        $statement->bindValue(4, $dados['valor']);
        $statement->bindValue(5, $dados['quantidade-adicionar']);
        $statement->bindValue(6, $dados['categoria-adicionar']);
        $statement->bindValue(7, $caminhoImagem); 
        $statement->execute();

        header('Location: /listagem');
    }


    public function deletar($id)
    {
        $deleteImg = "SELECT imagem FROM produto WHERE id = $id";
        $statement = $this->conexao->query($deleteImg);
        $imgDelete = $statement->fetchColumn();
        $delete = "DELETE FROM produto WHERE id = ?";
        $statement = $this->conexao->prepare($delete);
        $statement->bindValue(1, $id);
        $statement->execute();
        $diretorioUploads = 'C:/Users/guilherme.costa/Desktop/IDCAP/Codifica-Mais/PROJETO/PROJETO/CRUD-WEB/public/';
        if($imgDelete != "/uploads/imagem-padrao.jpg"){
            unlink($diretorioUploads . $imgDelete);
        } else {
            header('Location: /listagem');
        }
        header('Location: /listagem');
    }


    public function importarCsv()
    {
        $arquivo = $_FILES['importar'];
        $imagem = '/uploads/imagem-padrao.jpg';
        if ($arquivo['type'] == 'text/csv') {
            $dados_arquivo = fopen($arquivo['tmp_name'], 'r');
            while ($linha = fgetcsv($dados_arquivo, 1000, ';')) {
                if($linha[0] != "nome"){
                    $nome = ($linha[0] ?? NULL);
                    $sku = ($linha[1] ?? NULL);
                    $unidadeMedida = ($linha[2] ?? NULL);
                    $valor = ($linha[3] ?? NULL);
                    $quantidade = ($linha[4] ?? NULL);
                    $categoria = ($linha[5] ?? NULL);
                    $insert = "INSERT INTO produto (nome, sku, unidade_medida_id, valor, quantidade, categoria_id, imagem) VALUES (?,?,?,?,?,?,?)";
                    $statement = $this->conexao->prepare($insert);

                    $statement->bindValue(1, $nome);
                    $statement->bindValue(2, $sku);
                    $statement->bindValue(3, $unidadeMedida);
                    $statement->bindValue(4, $valor);
                    $statement->bindValue(5, $quantidade);
                    $statement->bindValue(6, $categoria);
                    $statement->bindValue(7, $imagem);
                    $statement->execute();
                } 
            }
    
            fclose($dados_arquivo);
        }
        header('Location: /listagem');
    }
}
