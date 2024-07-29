<?php

namespace Poo02;

class Mamifero implements Animal{
    protected $nome;
    
    function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function fazerSom()
    {
        
    }
    
    public function fazerAnimalEmitirSom(Animal $animal){
        echo $animal->fazerSom();
    }
}