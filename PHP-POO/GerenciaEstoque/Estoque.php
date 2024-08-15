<?php

namespace GerenciaEstoque;

class Estoque{
    private $produtos = array();

    public function addProduto(ProdutoInterface $produto){
        $this->produtos[] = $produto;
    }

    public function listarEstoque(){
        echo "------------------------------------" . PHP_EOL;
        foreach($this->produtos as $i){
            echo "Código do produto: " . $i->getCodigoProduto() . PHP_EOL . "Nome: " . $i->getNome() . PHP_EOL . "Quantidade: " . $i->getQuantidade() . PHP_EOL . "Preço: " , $i->getPreco() . PHP_EOL;
            if ($i instanceof Desktop){
                echo "Processador: " . $i->getProcessador() . PHP_EOL . "Memória Ram: " . $i->getMemoriaRam() . PHP_EOL . "Placa de vídeo: " . $i->getPlacaDeVideo() . PHP_EOL . "------------------------------------" . PHP_EOL;
            } elseif ($i instanceof Monitor){
                echo "Polegadas: " . $i->getPolegadas() . PHP_EOL . "Marca: " . $i->getMarca() . PHP_EOL . "------------------------------------" . PHP_EOL;
            } elseif ($i instanceof Periferico){
                echo "Marca: " . $i->getMarca() . PHP_EOL . "Modelo: " . $i->getModelo() . PHP_EOL . "Tipo de periférico: " . $i->getTipo() . PHP_EOL . "------------------------------------" . PHP_EOL;
            }
        }
    }

    public function venderProduto($codigoProduto, $quantidade){
       foreach ($this->produtos as $i){
        if ($i->getCodigoProduto() == $codigoProduto){
            if ($i->getQuantidade() >= $quantidade){
                $i->setQuantidade($i->getQuantidade() - $quantidade);
                echo "Venda bem sucedida." . PHP_EOL;
            } else {
                echo "Quantidade indisponível no estoque." . PHP_EOL;
            }
        } else {
            echo "Produto não encontrado." . PHP_EOL;
        } break;
       }
    }

    public function atualizarProduto($codigoProduto, $nome, $preco){
        if(empty($this->produtos)){
            echo "Não existem produtos cadastrados.\n";
        }
        foreach ($this->produtos as $i){
            if ($i->getCodigoProduto() == $codigoProduto){
                $i->setNome($nome);
                $i->Setpreco($preco);
                echo "Produto atualizado com sucesso!\n";
            } else {
                echo "Produto não encontrado\n";}
            break;
        } 
    }
    
    public function deletarProduto($codigoProduto){
        foreach ($this->produtos as $i => $produto){
            if($produto->getCodigoProduto() == $codigoProduto){
                if ($produto->getQuantidade() == 0){
                    unset($this->produtos[$i]);
                    echo "Produto deletado com sucesso!\n";
                } else {
                    echo "Não é possível deletar um produto que ainda tenha estoque.\n";
                }
            } else {
                echo "Produto não encontrado.\n";}
            break; 
        }
    }
}