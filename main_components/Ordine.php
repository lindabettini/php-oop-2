<?php

require_once __DIR__ . '/Carrello.php';
require_once __DIR__ . '/Cliente.php';
require_once __DIR__ . '/ClienteIscritto.php';

class Ordine
{
  public $stato_ordine;
  public $metodoPagamento;

  public function __construct($stato_ordine, $metodoPagamento = 'Carta di Credito')
  {
    $this->stato_ordine = $stato_ordine;
    $this->metodoPagamento = $metodoPagamento;
  }

  public function calcolaTotale($prodotti_selezionati)
  {
    $importiDaPagare = [];
    foreach ($prodotti_selezionati as $articolo) {
      $importiDaPagare[] = [$articolo->prezzo];
    }
  }
}
