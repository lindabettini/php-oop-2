<?php
require_once __DIR__ . '/main_components/products/Articolo.php';

class Gioco extends Articolo
{
  public function __construct($nome, $codiceArticolo, $prezzo, $marca, $categoriaAnimali, $dettagliProdotto)
  {
    return parent::__construct($nome, $codiceArticolo, $prezzo, $marca, $categoriaAnimali, $dettagliProdotto);
  }
}
