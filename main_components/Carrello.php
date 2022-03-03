<?php

class Carrello
{
  public $prodottiSelezionati = [];

  public function __construct(array $prodottiSelezionati)
  {
    $this->prodottiSelezionati = $prodottiSelezionati;
  }
}
