<?php

require_once __DIR__ . '/products/Articolo.php';
require_once __DIR__ . '/customers/Cliente.php';
require_once __DIR__ . '/customers/ClienteIscritto.php';
require_once __DIR__ . '/Carrello.php';
require_once __DIR__ . '/Ordine.php';


$lindaCarrello = new Carrello;

$lindaCarrello->aggiungiAlCarrello($cibo1);

var_dump($lindaCarrello);


$lindaOrdine = new Ordine('confermato');

$lindaOrdine->calcolaTotale($lindaCarrello->prodotti_selezionati);

var_dump($lindaOrdine);
