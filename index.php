<?php

require_once __DIR__ . '/main_components/products/Cibo.php';
require_once __DIR__ . '/main_components/products/Gioco.php';
require_once __DIR__ . '/main_components/products/Igiene.php';
require_once __DIR__ . '/main_components/customers/Cliente.php';
require_once __DIR__ . '/main_components/customers/ClienteIscritto.php';
require_once __DIR__ . '/main_components/Carrello.php';
require_once __DIR__ . '/main_components/Ordine.php';
require_once __DIR__ . '/main_components/traits/Indirizzo.php';
require_once __DIR__ . '/main_components/traits/CartaDiCredito.php';


$lindaCarrello = new Carrello;

$lindaCarrello->aggiungiAlCarrello($cibo1);

$lindaCarrello->aggiungiAlCarrello($cibo2);

var_dump($lindaCarrello);


$lindaOrdine = new Ordine('confermato');

$lindaOrdine->calcolaTotale($lindaCarrello->prodotti_selezionati);

var_dump($lindaOrdine);
