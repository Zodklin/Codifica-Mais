<?php

echo "Digite a altura: ";
$altura = (int)trim(fgets(STDIN));

echo "Digite a largura: ";
$largura = (int)trim(fgets(STDIN));

$area = $largura * $altura;
$perimetro = 2*($largura + $altura);

echo "Largura: $largura metros" . PHP_EOL;
echo "Altura: $altura metros" . PHP_EOL;
echo "Largura: $area m²" . PHP_EOL;
echo "Largura: $perimetro metros";


