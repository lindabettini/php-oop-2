<?php

require_once __DIR__ . '/main_components/products/Articolo.php';
require_once __DIR__ . '/main_components/products/Gioco.php';
require_once __DIR__ . '/main_components/products/Cibo.php';
require_once __DIR__ . '/main_components/products/Igiene.php';
require_once __DIR__ . '/main_components/customers/Cliente.php';
require_once __DIR__ . '/main_components/customers/ClienteIscritto.php';
require_once __DIR__ . '/main_components/Carrello.php';
require_once __DIR__ . '/main_components/Cassa.php';


$lindaCarrello = new Carrello([$cibo1, $cibo2, $cibo3]);

var_dump($lindaCarrello);
