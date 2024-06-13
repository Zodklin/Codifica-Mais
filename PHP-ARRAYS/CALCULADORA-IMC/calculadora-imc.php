<?php

function resultado($peso, $altura){
    $imc = $peso / ($altura * $altura);

    if ($imc < 18.5){
        return "Seu IMC é: $imc , sua categoria é Magreza";
    } else if ($imc >= 18.5 && $imc <= 24.9){
        return "Seu IMC é: $imc , sua categoria é Normal";
    } else if ($imc >= 25 && $imc <= 29.9){
        return "Seu IMC é: $imc , sua categoria é Sobrepeso";
    } else if ($imc >= 30 && $imc <= 34.9){
        return "Seu IMC é: $imc , sua categoria é Obesidade grau I";
    } else if ($imc >= 35 && $imc <= 39.9){
        return "Seu IMC é: $imc , sua categoria é Obesidade Grau II";
    } else {
        return "Seu IMC é: $imc , sua categoria é Obesidade Grau III";
    }
}

echo "Digite seu peso em KG (ex. 80): ";
$peso = (int)trim(fgets(STDIN));
echo "Digite sua altura em metros (ex. 1.85): ";
$altura = (float)trim(fgets(STDIN));

$imcFinal = resultado($peso, $altura);

echo $imcFinal;