<?php
namespace VEICULOS\src;

require_once __DIR__ . '\autoload.php';

abstract class Carro extends Veiculo {
    public function abrirPorta() {
        echo "Carro está com a porta aberta" . PHP_EOL;
    }

    public function rodas($rodas) {
        $this->rodas = $rodas;
        echo "Esse carro tem $rodas rodas" . PHP_EOL;
    }

    public function acelerar() {
        echo "Carro está acelerando" . PHP_EOL;
    }

    public function frear() {
        echo "Carro está freando" . PHP_EOL;
    }

    public function exibirDetalhes() {
        echo "------------------------------" . PHP_EOL;
        echo "Exibindo Detalhes..." . PHP_EOL;
        echo $this->nome . PHP_EOL;
        echo $this->modelo . PHP_EOL;
        echo $this->ano . PHP_EOL;
        echo "Esse carro tem " . $this->rodas . " rodas" . PHP_EOL;
        echo "------------------------------" . PHP_EOL;
    }
}

$carro1 = new Carro("Nissan", "Sentra", 2013);
$carro1->abrirPorta();
$carro1->rodas(4);
$carro1->acelerar();
$carro1->frear();
$carro1->exibirDetalhes();