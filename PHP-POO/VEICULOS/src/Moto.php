<?php
namespace src;

require_once __DIR__ . '/autoload.php';

class Moto extends Veiculo{
    public function meterGrau(){
        echo "A moto está metendo um grau daleee!" . PHP_EOL;
    }

    public function rodas($rodas){
        $this->rodas = $rodas;
        echo "Essa moto tem $rodas rodas" . PHP_EOL; 
    }

    public function acelerar() {
        echo "Moto está acelerando" . PHP_EOL;
    }

    public function frear() {
        echo "Moto está freando" . PHP_EOL;
    }

    public function exibirDetalhes() {
        echo "------------------------------" . PHP_EOL;
        echo "Exibindo Detalhes..." . PHP_EOL;
        echo $this->nome . PHP_EOL;
        echo $this->modelo . PHP_EOL;
        echo $this->ano . PHP_EOL;
        echo "Essa moto tem " . $this->rodas . " rodas" . PHP_EOL;
        echo "------------------------------" . PHP_EOL;
    }
}