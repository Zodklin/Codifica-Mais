<?php

class Moto extends Veiculo{
    public function meterGrau(){
        echo "A moto está metendo um grau daleee!";
    }

    public function cor($cor){
        echo "Essa moto tem a cor: " . $this->cor;
    }
}