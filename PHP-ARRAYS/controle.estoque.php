<?php
$estoque = [
    [
    'sku' => 'GRA-001',
    'nome' => 'Arroz 5kg',
    'unidade_medida' => '5kg',
    'quantidade' => 50,
    'preco' => 37.95
    ],
    [
    'sku' => 'GRA-002',
    'nome' => 'Feijão Preto 1kg',
    'unidade_medida' => '1kg',
    'quantidade' => 30,
    'preco' => 8.99
    ],
    [
    'sku' => 'MAS-003',
    'nome' => 'Macarrão Espaguete 500g',
    'unidade_medida' => '500g',
    'quantidade' => 100,
    'preco' => 9.99
    ],
    [
    'sku' => 'MAN-004',
    'nome' => 'Óleo de Soja 900ml',
    'unidade_medida' => '900ml',
    'quantidade' => 60,
    'preco' => 6.98
    ],
    [
    'sku' => 'GRA-005',
    'nome' => 'Açúcar Refinado 1kg',
    'unidade_medida' => '1kg',
    'quantidade' => 80,
    'preco' => 4.98
    ],
    [
    'sku' => 'GRA-006',
    'nome' => 'Sal Refinado 1kg',
    'unidade_medida' => '1kg',
    'quantidade' => 40,
    'preco' => 4.5
    ],
    [
    'sku' => 'GRA-007',
    'nome' => 'Café Torrado e Moído 500g',
    'unidade_medida' => '500g',
    'quantidade' => 20,
    'preco' => 16.98
    ],
    [
    'sku' => 'BEB-008',
    'nome' => 'Leite UHT Integral 1L',
    'unidade_medida' => '1L',
    'quantidade' => 70,
    'preco' => 6.99
    ],
    [
    'sku' => 'GRA-009',
    'nome' => 'Farinha de Trigo 1kg',
    'unidade_medida' => '1kg',
    'quantidade' => 90,
    'preco' => 5.45
    ],
    [
    'sku' => 'PRO-010',
    'nome' => 'Molho de Tomate',
    'unidade_medida' => '340g',
    'quantidade' => 50,
    'preco' => 3.99
    ]
   ];

// Implemente aqui o código
// Função para adicionar um produto
function adicionarProduto(&$estoque, $sku, $nome, $unidade_medida, $quantidade, $preco)
{
    foreach($estoque as $i => $produto){
        if($produto['sku'] == $sku){
            echo "Produto já existe no estoque";
            return;
        }
    }
    $estoque[] = [
        'sku' => $sku,
        'nome' => $nome,
        'unidade_medida' => $unidade_medida,
        'quantidade' => $quantidade,
        'preco' => $preco
    ];
}
// Função para listar o estoque
function listarEstoque(&$estoque){    
    if (empty($estoque)){
        return "Ops, estoque vazio." . PHP_EOL;
    }
    foreach ($estoque as $i){
        echo "Código: " . $i['sku'] . PHP_EOL;
        echo "Nome: " . $i['nome'] . PHP_EOL;
        echo "Unidade de Medida: " . $i['unidade_medida'] . PHP_EOL;
        echo "Quantidade: " . $i['quantidade'] . PHP_EOL;
        echo "Preço: " . $i['preco'] . PHP_EOL;
        echo "===========================================" . PHP_EOL;
    }


};
// Função para vender um produto
function venderProduto(&$estoque, $sku, $quantidade){
    foreach($estoque as $i => $produto){
        if($produto['sku'] == $sku){
            if ($quantidade > $estoque[$i]['quantidade']){
                echo "Não temos essa quantidade em estoque para venda!";
                return;
            }
            $estoque[$i]['quantidade'] -= $quantidade;
            echo "Venda bem sucedida!" . PHP_EOL;
            return;
        } 
    }
    echo "Produto não localizado.";
}

//Função para deletar produto
function deletarProduto(&$estoque, $sku){

    // $key = array_search($sku, array_column($estoque, 'sku'));     
    // if (empty($key)) {
    // }
    // echo "$key\n";
    // if ($produto[$key]['quantidade'] >= 1){
    // unset($estoque[$key]);

    foreach($estoque as $i => $produto){
        if ($produto['sku'] == $sku){
            if ($produto['quantidade'] >= 1){
                $delete = readline("Produto ainda em estoque, tem certeza que deseja deletar? S ou N: ");
                if ($delete == 'S'){
                    unset($estoque[$i]);
                    echo "Produto deletado com sucesso\n";
                } else {
                    echo "Ok, voltando ao menu inicial\n";
                    return;
                }
            } else {
                unset($estoque[$i]);
                echo "Produto deletado com sucesso\n";
                return;
            }
        }
    }
}

// Função para verificar o estoque 
function verificarEstoque (&$estoque, $sku){
    foreach($estoque as $i => $produto){
        if($produto['sku'] == $sku){
            echo "SKU do produto: " . $produto['sku'] . PHP_EOL;
            echo "Nome do produto: " . $produto['nome'] . PHP_EOL;
            echo "Medida do produto: " . $produto['unidade_medida'] . PHP_EOL;
            echo "Quantidade: " . $produto['quantidade'] . PHP_EOL;
            echo "Preço do produto: " . $produto['preco'] . PHP_EOL;
        } else {
            echo "Produto não disponível.";
        }
    }
}

// - Criar função para indicar o total de itens distintos que tem disponível no estoque
// (pode considerar os que estão com quantidade zerada), e a quantidade total de itens
// no estoque (soma de todas as quantidades de todos os itens)

function itens(&$estoque){
   $qtItens = count($estoque);
   $somaItens = 0;
   for($i = 0; $i < $qtItens; $i++){
    $somaItens = $estoque[$i]['quantidade'] + $somaItens;
   }
   echo "O total de itens distintos em estoque é de $qtItens\n";
   echo "A soma da quantidade de itens é de $somaItens\n";
   return;
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
    echo "5. Deletar Produto\n";
    echo "6. Itens do estoque\n";
    echo "7. Sair\n";
    $opcao = readline("Digite a sua escolha: ");
    return $opcao . PHP_EOL;
}

while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $sku = readline("Digite o SKU do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $unidade_medida = readline("Digite a unidade de medida: ");
            $quantidade = readline("Digite a quantidade: ");
            $preco = readline("Digite o preço: ");
            adicionarProduto($estoque, $sku, $nome, $unidade_medida, $quantidade, $preco);
            break;
        case 2:
            echo "Vender um produto\n";
            // Implemente aqui o código para a opção 2
            $sku = readline("Digite o código do produto que deseja vender: ");
            $quantidade = readline("Digite a quantidade que deseja vender: ");
            venderProduto($estoque, $sku, $quantidade);
            break;
        case 3:
            echo "Verificar Estoque\n";
            $sku = readline("Digite o código do produto que deseja verificar: ");
            verificarEstoque ($estoque, $sku);
            break;
        case 4:
            echo "Listar o Estoque\n";
            echo listarEstoque($estoque);
            break;
        case 5:
                echo "Deletar produto\n";
                $sku = readline("Digite o SKU do produto: ");
                deletarProduto($estoque, $sku);
            break;
        case 6:
            itens($estoque);
            break;
        case 7:
            echo "Saindo...\n";
            exit; // Sai do loop e encerra o script
        default:
            echo "Opção inválida, por favor tente novamente.\n";
            break;
    }
}