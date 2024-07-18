<?php

class Carro
{
    private $marca;
    private $ano;
    private $modelo;

    function __construct ($marca, $ano, $modelo){
        $this->marca = $marca;
        $this->ano = $ano;
        $this->modelo = $modelo;
    }

    public function acelerar($gasolina) {
        if ($gasolina == "S"){
            echo "Vrummmm" . PHP_EOL;
        } else {
            echo "Carro está sem gasolina". PHP_EOL;
        }
    }

    public function frear() {
        echo "O carro " . $this->modelo . " está freando ". PHP_EOL;
    }
}