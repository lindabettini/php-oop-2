<?php

require_once __DIR__ . '/products/Articolo.php';
class Carrello
{
  public $prodotti_selezionati = [];

  public function __construct(array $prodotti_selezionati,)
  {
    $this->aggiungiAlCarrello($prodotto) = $prodotti_selezionati;
  }

  public function aggiungiAlCarrello($prodotto)
  {
    if (!($prodotto instanceof Articolo)) throw new Exception('Articolo non trovato');
    $this->$prodotti_selezionati = $prodotto;
  }
}
