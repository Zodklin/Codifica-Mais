<?php

namespace Poo02;

require_once __DIR__ . '/autoload.php';

class Gato extends Mamifero{
    public function fazerSom()
    {
        echo "Miau" . PHP_EOL;
    }
}