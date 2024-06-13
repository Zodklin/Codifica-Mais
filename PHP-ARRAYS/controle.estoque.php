<?php

$estoque = [];

// Implemente aqui o código
// Função para adicionar um produto
function adicionarProduto(&$estoque, $codigo, $nome, $tamanho, $cor, $quantidade)
{
    $estoque[] = [
        'codigo' => $codigo,
        'nome' => $nome,
        'tamanho' => $tamanho,
        'cor' => $cor,
        'quantidade' => $quantidade
    ];
}
// Função para listar o estoque
function listarEstoque(&$estoque){
    if (empty($estoque)){
        return "Ops, estoque vazio." . PHP_EOL;
    }

    foreach ($estoque as $i){
        echo "Código: " . $i['codigo'] . PHP_EOL;
        echo "Nome: " . $i['nome'] . PHP_EOL;
        echo "Tamanho: " . $i['tamanho'] . PHP_EOL;
        echo "Cor: " . $i['cor'] . PHP_EOL;
        echo "Quantidade: " . $i['quantidade'] . PHP_EOL;
        echo "===========================================" . PHP_EOL;
    }
};
// Função para vender um produto
function venderProduto(&$estoque, $codigo, $quantidade){
    foreach($estoque as $i => $produto){
        if($produto['codigo'] == $codigo){
            if ($quantidade > $estoque[$i]['quantidade']){
                echo "Não temos essa quantidade em estoque para venda!";
            }
            $estoque[$i]['quantidade'] -= $quantidade;
            echo "Venda bem sucedida!" . PHP_EOL;
            if($estoque[$i]['quantidade'] == 0){
                unset($estoque[$i]);
            }
        } else {
            echo "Produto não localizado.";
        }
        break;
    }
}

// Função para verificar o estoque 
function verificarEstoque (&$estoque, $codigo){
    foreach($estoque as $i => $produto){
        echo $codigo;
        print_r($estoque);
        if($produto['codigo'] == $codigo){
            echo "Código do produto: " . $produto['codigo'] . PHP_EOL;
            echo "Nome do produto: " . $produto['nome'] . PHP_EOL;
            echo "Tamanho do produto: " . $produto['tamanho'] . PHP_EOL;
            echo "Cor do produto: " . $produto['cor'] . PHP_EOL;
            echo "Quantidade do produto: " . $produto['quantidade'] . PHP_EOL;
        } else {
            echo "Produto não disponível.";
        }
    }
}

// Função para exibir o menu e obter a escolha do usuário
function exibirMenu()
{
    echo "\n";
    echo "Escolha uma das opções abaixo:\n";
    echo "1. Adicionar um produto\n";
    echo "2. Vender um produto\n";
    echo "3. Verificar Estoque\n";
    echo "4. Listar o Estoque\n";
    echo "5. Sair\n";
    $opcao = readline("Digite a sua escolha: ");
    return $opcao . PHP_EOL;
}

while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $codigo = readline("Digite o Código do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $tamanho = readline("Digite o Tamanho: ");
            $cor = readline("Digite a Cor: ");
            $quantidade = readline("Digite a Quantidade: ");
            adicionarProduto($estoque, $codigo, $nome, $tamanho, $cor, $quantidade);
            break;
        case 2:
            echo "Vender um produto\n";
            // Implemente aqui o código para a opção 2
            $codigo = readline("Digite o código do produto que deseja vender: ");
            $quantidade = readline("Digite a quantidade que deseja vender: ");
            venderProduto($estoque, $codigo, $quantidade);
            break;
        case 3:
            echo "Verificar Estoque\n";
            $codigo = readline("Digite o código do produto que deseja verificar: ");
            verificarEstoque ($estoque, $codigo);
            break;
        case 4:
            echo "Listar o Estoque\n";
            echo listarEstoque($estoque);
            break;
        case 5:
            echo "Saindo...\n";
            exit; // Sai do loop e encerra o script
        default:
            echo "Opção inválida, por favor tente novamente.\n";
            break;
    }
}