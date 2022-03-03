<?php

class Articolo
{
  public $nome;
  public $codiceArticolo;
  public $prezzo;
  public $marca;
  public $categoriaAnimali;
  public $dettagliProdotto;

  public function __construct($nome, $codiceArticolo, $prezzo, $marca, $categoriaAnimali, $dettagliProdotto)
  {
    $this->nome = $nome;
    $this->codiceArticolo = $codiceArticolo;
    $this->prezzo = $prezzo;
    $this->marca = $marca;
    $this->categoriaAnimali = $categoriaAnimali;
    $this->dettagliProdotto = $dettagliProdotto;
  }
}
