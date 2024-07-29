<?php

require_once __DIR__ . '/autoload.php';
use Poo02\{Gato,Cachorro};

$gato1 = new Gato("Yummi");
$gato1->fazerSom();
$gato1->fazerAnimalEmitirSom($gato1);

$cao1 = new Cachorro("Zod");
$cao1->fazerSom();
$cao1->fazerAnimalEmitirSom($cao1);