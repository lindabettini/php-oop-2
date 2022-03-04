<?php

require_once __DIR__ . '/Carrello.php';
require_once __DIR__ . '/customers/Cliente.php';
require_once __DIR__ . '/customers/ClienteIscritto.php';

class Ordine
{
  public $stato_ordine;
  public $metodoPagamento;
  public $totaleOrdine;

  public function __construct($stato_ordine, $metodoPagamento = 'Carta di Credito')
  {
    $this->stato_ordine = $stato_ordine;
    $this->metodoPagamento = $metodoPagamento;
  }

  public function calcolaTotale($prodotti_selezionati)
  {
    $this->totaleOrdine = 0;
    foreach ($prodotti_selezionati as $articolo) {
      $this->totaleOrdine += $articolo->prezzo;
    }
  }
}
