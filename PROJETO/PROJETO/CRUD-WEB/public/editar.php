<?php
session_start();
require_once '../vendor/autoload.php';
use App\Produtos;

$editar = new Produtos;
$produto = $editar->editar($_GET['id']);

if (!empty($_POST)) {
    $atualizar = new Produtos;
    $atualizar->salvar($_POST, $_GET['id']);
    header('Location: listagem.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Atualizar Item</title>
</head>
<body>
    <div class="container">
        <div class="card-principal">
            <div class="voltar"><a href="listagem.php" style="text-decoration: none; color: #3369c7"><i class="fa-solid fa-arrow-left-long" style="color: #3369c7;"></i></a></div>
            <h1 class="titulo-novo-item">Atualizar Item</h1>
            <form method="POST" action="">
                <div class="input-nome-item">
                    <label for="nome-item" class="nome-item">Nome do Item</label>
                    <input type="text" name="nome-item" class="nome-item" value="<?= ($produto['nome']) ?>" required>
                </div>
                <div class="input-sku-unidade">
                    <div class="SKU">
                        <label for="SKU" class="SKU">SKU</label>
                        <input type="text" name="SKU" class="SKU" value="<?= ($produto['sku']) ?>" required>
                    </div>
                    <div class="unidade-medida">
                        <label for="unidade" class="unidade">Unidade de Medida</label>
                        <input type="text" name="unidade" class="unidade" value="<?= ($produto['unidade_medida_id']) ?>" required>
                    </div>
                </div>
                <div class="input-valor-quantidade">
                    <div class="valor">
                        <label for="valor" class="valor">Valor</label>
                        <input type="text" name="valor" class="valor" placeholder="0,00" value="<?= ($produto['valor']) ?>" required>
                    </div>
                    <div class="quantidade-adicionar">
                        <label for="quantidade-adicionar" class="quantidade-adicionar">Quantidade</label>
                        <input type="text" name="quantidade-adicionar" class="quantidade-adicionar" value="<?= ($produto['quantidade']) ?>" required>
                    </div>
                </div>
                <div class="categoria-adicionar">
                    <label for="categoria-adicionar">Categoria</label>
                    <select name="categoria-adicionar" class="categoria-adicionar">
                        <option value="1" <?= $produto['categoria_id'] == 1 ? 'selected' : '' ?>>Eletrônicos</option>
                        <option value="2" <?= $produto['categoria_id'] == 2 ? 'selected' : '' ?>>Eletrodomésticos</option>
                        <option value="3" <?= $produto['categoria_id'] == 3 ? 'selected' : '' ?>>Móveis</option>
                        <option value="4" <?= $produto['categoria_id'] == 4 ? 'selected' : '' ?>>Decoração</option>
                        <option value="5" <?= $produto['categoria_id'] == 5 ? 'selected' : '' ?>>Vestuário</option>
                        <option value="7" <?= $produto['categoria_id'] == 7 ? 'selected' : '' ?>>Outros</option>
                    </select>
                </div>
                <button class="cria-item">Atualizar</button>
            </form>
        </div>
    </div>
</body>
</html>
