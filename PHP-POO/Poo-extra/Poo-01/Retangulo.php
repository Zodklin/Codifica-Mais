<?php

namespace Poo01;

require_once __DIR__ . '/autoload.php';

class Retangulo extends Forma{
    protected $altura;
    protected $base;

    function __construct($altura, $base){
        $this->altura = $altura;
        $this->base = $base;
    }

    public function calcularArea()
    {
        $area = $this->altura * $this->base;
        echo "A área desse retângulo é de: $area." . PHP_EOL;
    }   
}