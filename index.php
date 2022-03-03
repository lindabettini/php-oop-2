<?php

require_once __DIR__ . '/main_components/products/Articolo.php';
require_once __DIR__ . '/main_components/products/Gioco.php';
require_once __DIR__ . '/main_components/products/Cibo.php';
require_once __DIR__ . '/main_components/products/Igiene.php';

$cibo1 = new Cibo('Sano Foody', 'EPH7854', 5, 'Besty', 'Gatto', 'Morbide crocchette gustose', 'Umido', 'Pollo');

$cibo2 = new Cibo('Sano Foody', 'EPH7664', 5, 'Besty', 'Cane', 'Morbide crocchette gustose', 'Umido', 'Pollo');

$cibo3 = new Cibo('Happy Food', 'EPH7854', 5, 'Besty', 'Gatto', 'Croccanti bocconcini', 'Secco', 'Manzo');

$cibo4 = new Cibo('Happy Food', 'EPH7664', 5, 'Besty', 'Cane', 'Croccanti bocconcini', 'Secco', 'Pollo');

var_dump($cibo1);
var_dump($cibo2);
var_dump($cibo3);
var_dump($cibo4);
