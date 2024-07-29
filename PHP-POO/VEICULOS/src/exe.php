<?php

require_once __DIR__ . '/autoload.php';
use src\{Carro, Caminhao, Moto};

$carro1 = new Carro("Nissan", "Sentra", 2013);
$carro1->abrirPorta();
$carro1->rodas(4);
$carro1->acelerar();
$carro1->frear();
$carro1->exibirDetalhes();

$moto1 = new MOto("Honda", "CB500", 2018);
$moto1->meterGrau();
$moto1->rodas(2);
$moto1->acelerar();
$moto1->frear();
$moto1->exibirDetalhes();

$caminhao1 = new Caminhao("Scania", "770S", 2024);
$caminhao1->levantarCacamba();
$caminhao1->rodas(12);
$caminhao1->acelerar();
$caminhao1->frear();
$caminhao1->exibirDetalhes();