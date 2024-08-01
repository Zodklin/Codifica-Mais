<?php

namespace GerenciaEstoque;

interface ProdutoInterface{
    function limiteDesconto($percentDesconto);

    function getSku();

    function getNome();

    function getQuantidade();

    function getUnidadeMedida();

    function getPreco();
}