<?php
session_start();
require_once '../vendor/autoload.php';
use App\Produtos;
$controlador = new Produtos;
$produtos = $controlador->listar();
$categorias = $_SESSION['categorias'];
$unidadesMedidas = $_SESSION['unidades_medidas'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Listagem de produtos</title>
</head>
<body>
    <div class="container">
        <div class="card-principal">
            <div class="div-header">
                <a href="adicionar.php"><button class="novo-item">Novo Item</button></a>
                <div class="input-procurar">
                    <label for="procurar" class="procurar">Buscar item:</label>
                    <input type="text" id="procurar" class="procurar">
                </div>
                <section>
                    Produtos em estoque:
                </section>
            </div>
            <div class="lista-itens">
            <?php foreach ($produtos as $produto): ?>    
                <div class="item">
                    <section class="item-conteudo">
                        <span class="codigo">#00000<?= ($produto['id']) ?></span>
                        <span class="tipo"><?= ($categorias[$produto['categoria_id']]) ?></span>
                        <h2 class="item-nome"><?= ($produto['nome']) ?></h2>
                        <a href="editar.php?id=<?= ($produto['id']) ?>"><button class="editar">Editar</button></a>
                    </section>
                    <section class="item-conteudo">
                        <p class="sku">SKU: <?= ($produto['sku']) ?></p>
                        <h2 class="quantidade">Quantidade: <?= ($produto['quantidade']) ?></h2>
                        <button onclick="<?php $controlador->deletar($produto['id'])?>" class="deletar">deletar</button>
                    </section>
                </div>
                <div class="divisor">
                    <hr>
                </div>
                <?php endforeach; ?>
            </div> 
        </div>
    </div>
</body>
</html>
