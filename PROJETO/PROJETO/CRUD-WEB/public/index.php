<?php
    require '../vendor/autoload.php';
    require '../src/conexao-bd.php';

    use App\Produtos;

    $rotas = new Produtos();

    $uri = strtok($_SERVER['REQUEST_URI'], '?');
    $page = rtrim($uri, '/') ?: '/';
    
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
            $rotas->salvar($_POST);
            break;
        
        case "/deletar":
            $rotas->deletar($_GET['id']);
            break;

        case "/importar":
            $rotas->importarCsv();
            break;

        default:
            echo "Página não encontrada";

    }
?>