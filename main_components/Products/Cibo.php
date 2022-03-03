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

$cibo1 = new Cibo('Sano Foody', 'EPH7854', 5, 'Besty', 'Gatto', 'Morbide crocchette gustose', 'Umido', 'Pollo');

$cibo2 = new Cibo('Sano Foody', 'EPH7664', 5, 'Besty', 'Cane', 'Morbide crocchette gustose', 'Umido', 'Pollo');

$cibo3 = new Cibo('Happy Food', 'EPH7854', 5, 'Besty', 'Gatto', 'Croccanti bocconcini', 'Secco', 'Manzo');

$cibo4 = new Cibo('Happy Food', 'EPH7664', 5, 'Besty', 'Cane', 'Croccanti bocconcini', 'Secco', 'Pollo');
