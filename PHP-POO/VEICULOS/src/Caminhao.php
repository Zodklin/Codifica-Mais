<?php

class Caminhao extends Veiculo{

    public function levantarCacamba(){
        echo "Levantando a caçamba";
    }

    public function cor($cor){
        echo "Esse caminhão tem a cor: " . $this->cor;
    }
}