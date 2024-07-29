<?php

namespace Poo01;

require_once __DIR__ . '/autoload.php';

class Circulo extends Forma{
    protected $raio;
    protected $pi = 3.14;

    function __construct($raio)
    {
        $this->raio = $raio;
    }

    public function calcularArea()
    {
        $area = $this->pi * ($this->raio * $this->raio);
        echo "A área desse círculo é $area." . PHP_EOL;
    }
}