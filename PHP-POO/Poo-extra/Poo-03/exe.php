<?php

require_once __DIR__ . '/autoload.php';
use Poo03\{FuncionarioHorista, FuncionarioMensalista};

$funcionario1 = new FuncionarioHorista("Guilherme", 1000, 20);
$funcionario1->exibirInformacoes();

$funcionario2 = new FuncionarioMensalista("Joao", 7000);
$funcionario2->exibirInformacoes();