<?php
session_start();

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
                    <div class="item">
                    <section class="item-conteudo">
                            <span class="codigo">#000001</span>
                            <span class="tipo">Vestuario</span>
                            <h2 class="item-nome">Camisa Codifica+</h2>
                            <a href="editar.php"><button class="editar">Editar</button></a>
                        </section>
                        <section class="item-conteudo">
                            <p class="sku">SKU: 123456</p>
                            <h2 class="quantidade">Quantidade: 100</h2>
                            <button class="deletar">Deletar</button>
                        </section>
                    </div>
                    <div class="divisor">
                        <hr>
                    </div>
                        <div class="item">
                    <section class="item-conteudo">
                            <span class="codigo">#000002</span>
                            <span class="tipo">Eletrônico</span>
                            <h2 class="item-nome">Notebook</h2>
                            <a href="editar.php"><button class="editar">Editar</button></a>
                        </section>
                        <section class="item-conteudo">
                            <p class="sku">SKU: 123456</p>
                            <h2 class="quantidade">Quantidade: 45</h2>
                            <button class="deletar">Deletar</button>
                        </section>
                    </div>
                    <div class="divisor">
                        <hr>
                    </div>
                    <div class="item">
                    <section class="item-conteudo">
                            <span class="codigo">#000003</span>
                            <span class="tipo">Escritório</span>
                            <h2 class="item-nome">Caderno de anotação</h2>
                            <a href="editar.php"><button class="editar">Editar</button></a>
                        </section>
                        <section class="item-conteudo">
                            <p class="sku">SKU: 123456</p>
                            <h2 class="quantidade">Quantidade: 15</h2>
                            <button class="deletar">Deletar</button>
                        </section>
                    </div>
                </div> 
            </div>
    </div>
</body>
</html>