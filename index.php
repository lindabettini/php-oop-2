<?php

require_once __DIR__ . '/products/Articolo.php';
require_once __DIR__ . '/products/Gioco.php';
require_once __DIR__ . '/products/Cibo.php';
require_once __DIR__ . '/products/Igiene.php';

$Cibo1 = new Cibo('Sano Foody', 'EPH7854', 5, 'Besty', 'Gatto', 'Morbide crocchette gustose', 'Umido', 'Pollo');

$Cibo2 = new Cibo('Sano Foody', 'EPH7664', 5, 'Besty', 'Cane', 'Morbide crocchette gustose', 'Umido', 'Pollo');

$Cibo3 = new Cibo('Happy Food', 'EPH7854', 5, 'Besty', 'Gatto', 'Croccanti bocconcini', 'Secco', 'Manzo');


$Cibo4 = new Cibo('Happy Food', 'EPH7664', 5, 'Besty', 'Cane', 'Croccanti bocconcini', 'Secco', 'Pollo');

var_dump($cibo1);

var_dump($cibo2);
var_dump($cibo3);
var_dump($cibo4);
