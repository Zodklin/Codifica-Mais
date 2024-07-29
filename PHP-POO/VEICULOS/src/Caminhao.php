<?php
namespace src;

require_once __DIR__ . '/autoload.php';

class Caminhao extends Veiculo{

    public function levantarCacamba(){
        echo "Levantando a caçamba" . PHP_EOL;
    }

    public function rodas($rodas){
        $this->rodas = $rodas;
        echo "Esse Caminhão tem $rodas rodas" . PHP_EOL; 
    }

    public function acelerar() {
        echo "Caminhão está acelerando" . PHP_EOL;
    }

    public function frear() {
        echo "Caminhão está freando" . PHP_EOL;
    }

    public function exibirDetalhes() {
        echo "------------------------------" . PHP_EOL;
        echo "Exibindo Detalhes..." . PHP_EOL;
        echo $this->nome . PHP_EOL;
        echo $this->modelo . PHP_EOL;
        echo $this->ano . PHP_EOL;
        echo "Esse caminhão tem " . $this->rodas . " rodas" . PHP_EOL;
        echo "------------------------------" . PHP_EOL;
    }
}