<?php

echo "Digite a primeira nota: " . PHP_EOL;
$nota1 = trim(fgets(STDIN));
echo "Digite a segunda nota: " . PHP_EOL;
$nota2 = trim(fgets(STDIN));
echo "Digite a terceira nota: " . PHP_EOL;
$nota3 = trim(fgets(STDIN));

$media = ($nota1 + $nota2 + $nota3)/3;

echo "Sua media e: $media";