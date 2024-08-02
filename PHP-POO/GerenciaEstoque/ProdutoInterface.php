<?php

namespace GerenciaEstoque;

interface ProdutoInterface{
    function limiteDesconto($percentDesconto);
    function getCodigoProduto();
    function getNome();
    function getQuantidade();
    function getPreco();
    function setNome($nome);
    function setQuantidade($quantidade);
    function setPreco($preco);
}