<?php

$notasAlunos = [
    [8.5, 6.0, 7.8, 9.2, 5.5], // Aluno 1
    [7.0, 8.0, 6.5, 7.5, 8.5], // Aluno 2
    [6.5, 7.5, 4.5, 5.5, 7.0], // Aluno 3
    [5.0, 4.6, 7.8, 9.0, 6.0] // Aluno 4
    ];
    
$reprovados = 0;
$aprovados = 0;

function calcularMedias($notas){
    $soma = array_sum($notas);
    $quantidade = count($notas);
    $media = $soma / $quantidade;
    return $media;
}

foreach($notasAlunos as $i => $notas){
    $media = calcularMedias($notas);
    echo "O aluno: " . $i+1 . " obteve a média: $media" . PHP_EOL;
    if($media >= 7){
        $aprovados++;
    } else {
        $reprovados++;
    }
}

echo "O total de aprovados foi: $aprovados" . PHP_EOL;
echo "O total de reprovados foi: $reprovados";
