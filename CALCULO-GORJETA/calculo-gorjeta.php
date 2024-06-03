<?php

echo "Qual o valor da conta? R$";
$valorIni = (int)trim(fgets(STDIN));

echo "Qual a % da gorjeta? ";
$percentGorjeta = (int)trim(fgets(STDIN));

$valorGorjeta = ($percentGorjeta*$valorIni)/100;

$valorFim = $valorGorjeta + $valorIni;

echo "O valor da gorjeta ficou em R$$valorGorjeta e o total ficou em R$$valorFim.";


