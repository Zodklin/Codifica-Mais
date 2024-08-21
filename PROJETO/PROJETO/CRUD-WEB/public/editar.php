<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Listagem de produtos</title>
</head>
<body>
    <div class="container">
        <div class="card-principal">
            <div class="voltar"><a href="listagem.php" style="text-decoration: none; color: #3369c7"><i class="fa-solid fa-arrow-left-long" style="color: #3369c7;"></i></i></a></div>
            <h1 class="titulo-novo-item">Atualizar Item</h1>
            <form>
                <div class="input-nome-item">
                    <label for="nome-item" class="nome-item">Nome do Item</label>
                    <input type="text" name="nome-item" class="nome-item" required>
                </div>
                <div class="input-sku-unidade">
                    <div class="SKU">
                        <label for="SKU" class="SKU">SKU</label>
                        <input type="text" name="SKU" class="SKU" required>
                    </div>
                    <div class="unidade-medida">
                        <label for="unidade" class="unidade">Unidade de Medida</label>
                        <input type="text" name="unidade" class="unidade" required>
                    </div>
                </div>
                <div class="input-valor-quantidade">
                    <div class="valor">
                        <label for="valor" class="valor">Valor</label>
                        <input type="text" name="valor" class="valor" placeholder="0,00" required>
                    </div>
                    <div class="quantidade-adicionar">
                        <label for="quantidade-adicionar" class="quantidade-adicionar">Quantidade</label>
                        <input type="text" name="quantidade-adicionar" class="quantidade-adicionar" required>
                    </div>
                </div>
                <div class="categoria-adicionar">
                    <label for="categoria-adicionar">Categoria</label>
                    <select name="categoria-adicionar" class="categora-adicionar">
                        <option value="eletronicos">Eletrônicos</option>
                        <option value="eletrodomesticos">Eletrodomésticos</option>
                        <option value="moveis">Móveis</option>
                        <option value="decoracao">Decoração</option>
                        <option value="vestuario">Vestuário</option>
                        <option value="outros">Outros</option>
                    </select>
                </div>
                <button class="cria-item">Atualizar</button>
            </form>
        </div>

    </div>
</body>
</html>