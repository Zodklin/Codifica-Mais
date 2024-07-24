<?php

require 'Produto.php';

$produto1 = new Produto("Celular", 100, 50);

$produto1->alterarPreco(200);

$produto1->ajustarEstoque(60, "+");

$produto1->ajustarEstoque(-1, "+");

$produto1->ajustarEstoque(10, "-");

$produto1->ajustarEstoque(200, "-");

$produto1->exibirDetalhes();