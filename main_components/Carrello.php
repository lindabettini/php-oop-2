<?php

require_once __DIR__ . '/products/Articolo.php';
class Carrello
{
  public $prodottiSelezionati = [];
  public $totaleSpesa;

  public function __construct(array $prodottiSelezionati, $totaleSpesa)
  {
    $this->prodottiSelezionati = $prodottiSelezionati;
    $this->calcolaSpesa() = $totaleSpesa;
  }

  public function calcolaSpesa($prodottiSelezionati)
  {
    $prices = [];
    foreach ($prodottiSelezionati as $prodotto) :
      array_push($prodotto($prices, $articolo->$prezzo));
    endforeach;
  }
}
