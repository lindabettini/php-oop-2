<?php
require_once __DIR__ . '/Articolo.php';

class Igiene extends Articolo
{
  public function __construct($nome, $codiceArticolo, $prezzo, $marca, $categoriaAnimali, $dettagliProdotto)
  {
    parent::__construct($nome, $codiceArticolo, $prezzo, $marca, $categoriaAnimali, $dettagliProdotto);
  }
}
