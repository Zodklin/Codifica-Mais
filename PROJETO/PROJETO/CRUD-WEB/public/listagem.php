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
                <form class="importar-csv" method="POST" enctype="multipart/form-data" action="/importar">
                    <label for="importar" class="importar">Arquivo CSV:</label>
                    <input type="file" id="importar" class="importar" name="importar">
                    <input type="submit" value="Enviar">
                </form>
                <section>
                <?php if (empty($produtos)){echo "Sem produtos em estoque";} else {echo "Produtos em estoque:";} ?>
                </section>
            </div>
            <div class="lista-itens">
            <?php foreach ($produtos as $produto): ?>    
                <div class="item">
                    <section class="item-conteudo">
                        <span class="codigo">#00000<?=$produto['produtoId']?></span>
                        <span class="tipo"><?= $produto['categoriaNome']?></span>
                        <h2 class="item-nome"><?= $produto['produtoNome']?></h2>
                        <a href="\editar?id=<?=$produto['produtoId']?>"><button class="editar">Editar</button></a>
                    </section>
                    <section class="item-conteudo">
                        <p class="sku">SKU: <?= $produto['produtoSku']?></p>
                        <h2 class="quantidade">Quantidade: <?= $produto['produtoQuantidade']?></h2>
                        <form action="/deletar?id=<?= $produto['produtoId']?>" method="POST">
                            <a href="/deletar?id=<?= $produto['produtoId']?>"><button onclick="return confirm('Deseja deletar o produto?')"class="deletar">deletar</button></a>
                        </form>
                    </section>
                    <section >
                        <img src="<?= $produto['imagem'] ?>" class="imagem-conteudo" alt="imagemProduto">
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
