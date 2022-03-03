<?php

class Carrello
{
  public $prodottiSelezionati = [];

  public function __construct($prodottiSelezionati)
  {
    $this->prodottiSelezionati = $prodottiSelezionati;
  }
}
