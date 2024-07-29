<?php

namespace Poo02;

require_once __DIR__ . '/autoload.php';

class Cachorro extends Mamifero{
    public function fazerSom()
    {
        echo "Latido" . PHP_EOL;
    }
}
