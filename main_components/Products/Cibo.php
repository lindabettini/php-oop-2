<?php
require_once __DIR__ . '/products/Articolo.php';

class Cibo extends Articolo
{
  public $qualita;
  public $ingredienti;

  public function __construct($nome, $codiceArticolo, $prezzo, $marca, $categoriaAnimali, $dettagliProdotto, $qualita, $ingredienti)
  {
    return parent::__construct($nome, $codiceArticolo, $prezzo, $marca, $categoriaAnimali, $dettagliProdotto);

    $this->qualita = $qualita;
    $this->ingredienti = $ingredienti;
  }
}
