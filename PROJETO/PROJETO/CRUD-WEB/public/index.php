<?php
    // Inicia a sessão
    session_start();

    require '../vendor/autoload.php';

    use App\Produtos;

    $rotas = new Produtos();

    // Define o array de categorias, unidades de medida e produtos
    if (empty($_SESSION))
    {
        $_SESSION['categorias'] = [
            '1' => 'Eletrônicos',
            '2' => 'Eletrodomésticos',
            '3' => 'Móveis',
            '4' => 'Decoração',
            '5' => 'Vestuário',
            '7' => 'Outros'
        ];
    }

    if (empty($_SESSION))
    {
        $_SESSION['unidades_medidas'] = [
            '1' => 'Un',
            '2' => 'Kg',
            '3' => 'g',
            '4' => 'L',
            '5' => 'mm',
            '6' => 'cm',
            '7' => 'm',
            '8' => 'm²',
        ];
    }

    if (empty($_SESSION))
    {
        $_SESSION['produtos'] = [[
                'id' => 1,
                'nome' => 'Smartphone',
                'sku' => '123456',
                'unidade_medida_id' => '1',
                'valor' => 1500.00,
                'quantidade' => 10,
                'categoria_id' => '1',
            ],[
                'id' => 2,
                'nome' => 'Geladeira',
                'sku' => '123457',
                'unidade_medida_id' => '2',
                'valor' => 2500.00,
                'quantidade' => 5,
                'categoria_id' => '2',
            ],
        ];
    }

    $uri = strtok($_SERVER['REQUEST_URI'], '?');
    $page = rtrim($uri, '/') ?: '/';
    // var_dump($page);
    // die();
    switch ($page)
    {
        case "/listagem": 
            $rotas->listar();
            break;
        
        case "/criar":
            $rotas->criar();
            break;

        case "/editar":
            $rotas->editar($_GET['id']);
            break;

        case "/atualizar":
            $rotas->atualizar($_GET['id']);
            break;
        
        case "/salvar":
            $rotas->salvar($_POST, $_SESSION['produto'['id']]);
            break;
        
        case "/deletar":
            $rotas->deletar($_GET['id']);
            break;

        default:
            echo "Página não encontrada";

    }
?>