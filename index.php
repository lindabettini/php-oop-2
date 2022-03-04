<?php

require_once __DIR__ . '/main_components/products/Cibo.php';
require_once __DIR__ . '/main_components/customers/Cliente.php';
require_once __DIR__ . '/main_components/customers/ClienteIscritto.php';
require_once __DIR__ . '/main_components/Carrello.php';
require_once __DIR__ . '/main_components/Ordine.php';


$lindaCarrello = new Carrello;

$lindaCarrello->aggiungiAlCarrello($cibo1);

$lindaCarrello->aggiungiAlCarrello($cibo2);

var_dump($lindaCarrello);


$lindaOrdine = new Ordine('confermato');

$lindaOrdine->calcolaTotale($lindaCarrello->prodotti_selezionati);

var_dump($lindaOrdine);
