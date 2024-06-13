<?php

$numeros = array(1, 4, 8, 2, 3, 7, 4); // Array com os numeros 
$posicoes = array(); // array pra validar o indice caso encontre

echo "Digite um número para verifica se existe no array: ";
$validacao = (int)trim(fgets(STDIN)); //converte o que foi digitado para inteiro e armazena na variavel 

foreach ($numeros as $i => $element){ //percorre o array numeros
    if($element == $validacao){//se o elemento encontrado no array for igual ao numero digitado pelo usuario
        $posicoes[] = $i; //armazena o indice na variavel posicoes
    }
}

if($posicoes != null){
    echo "O número $validacao foi encontrado na(s) posição(ões): ";
    foreach ($posicoes as $posicao) { //percorre a variavel posicoes armazenando o numero encontrado em posicao e depois os exibe.
        echo "$posicao , ";
    }
    echo "\n";
} else {
    echo "O número não existe nesse array.\n";//caso $posicoes seja nulo joga o erro
}