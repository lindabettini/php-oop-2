<?php
require_once __DIR__ . '/Articolo.php';

class Cibo extends Articolo
{
  public $qualita;
  public $ingredienti;

  public function __construct($nome, $codiceArticolo, $prezzo, $marca, $categoriaAnimali, $dettagliProdotto, $qualita, $ingredienti)
  {
    parent::__construct($nome, $codiceArticolo, $prezzo, $marca, $categoriaAnimali, $dettagliProdotto);
    $this->qualita = $qualita;
    $this->ingredienti = $ingredienti;
  }
}
