

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Adicionar produto</title>
</head>
<body>
    <div class="container">
        <div class="card-principal">
            <div class="voltar"><a href="/listagem" style="text-decoration: none; color: #3369c7"><i class="fa-solid fa-arrow-left-long" style="color: #3369c7;"></i></i></a></div>
            <h1 class="titulo-novo-item"><?php  echo isset($produtoSelecionado) ? "Editar" : "Adicionar"; ?></h1>
            <form method="POST" action="">
                <div class="input-nome-item">
                    <label for="nome-item" class="nome-item" >Nome do Item</label>
                    <input type="text" name="nome-item" class="nome-item"  value="<?php  echo isset($produtoSelecionado) ? $produtoSelecionado['nome'] : ""; ?>">
                </div>
                <div class="input-sku-unidade">
                    <div class="SKU">
                        <label for="SKU" class="SKU">SKU</label>
                        <input type="text" name="SKU" class="SKU" required>
                    </div>
                    <div class="unidade-medida">
                        <label for="unidade" class="unidade">Unidade de Medida</label>
                        <select name="unidade-medida-adicionar" class="unidade-medida-adicionar">
                            <option value="1">Un</option>
                            <option value="2">Kg</option>
                            <option value="3">g</option>
                            <option value="4">L</option>
                            <option value="5">mm</option>
                            <option value="6">cm</option>
                            <option value="7">m</option>
                            <option value="8">m²</option>
                        </select>
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
                    <label for="categoria-adicionar" class="label-categoria-adicionar">Categoria</label>
                    <select name="categoria-adicionar" class="categoria-adicionar">
                        <option value="1">Eletrônicos</option>
                        <option value="2">Eletrodomésticos</option>
                        <option value="3">Móveis</option>
                        <option value="4">Decoração</option>
                        <option value="5">Vestuário</option>
                        <option value="7">Outros</option>
                    </select>
                </div>
                <button class="cria-item"><?php  echo isset($produtoSelecionado) ? "Atualizar" : "Criar item"; ?></button>
            </form>
        </div>
    </div>
</body>
</html>