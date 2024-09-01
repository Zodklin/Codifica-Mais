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
                <a href="\criar"><button class="novo-item">Novo Item</button></a>
                <div class="input-procurar">
                    <label for="procurar" class="procurar">Buscar item:</label>
                    <input type="text" id="procurar" class="procurar">
                </div>
                <section>
                    Produtos em estoque:
                </section>
            </div>
            <div class="lista-itens">
            <?php foreach ($_SESSION['produtos'] as $produto): ?>    
                <div class="item">
                    <section class="item-conteudo">
                        <span class="codigo">#00000<?= ($produto['id']) ?></span>
                        <span class="tipo"><?= ($_SESSION['categorias'][$produto['categoria_id']]) ?></span>
                        <h2 class="item-nome"><?= ($produto['nome']) ?></h2>
                        <a href="\editar?id=<?= ($produto['id']) ?>"><button class="editar">Editar</button></a>
                    </section>
                    <section class="item-conteudo">
                        <p class="sku">SKU: <?= ($produto['sku']) ?></p>
                        <h2 class="quantidade">Quantidade: <?= ($produto['quantidade']) ?></h2>
                        <form action="listagem" method="POST">
                            <a href="/deletar?id=<?= ($produto['id'])?>"><button class="deletar">deletar</button></a>
                        </form>
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
