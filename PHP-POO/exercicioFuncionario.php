<?php

require 'Funcionario.php';

$funcionario1 = new Funcionario ("Guilherme", "Analista de Suporte de TI", 2600);

$funcionario1->ajustarSalario(3000);

$funcionario1->alterarCargo("Analista de Sistemas");

$funcionario1->exibirDetalhes();