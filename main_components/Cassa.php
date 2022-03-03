<?php

class Cassa
{
  public $totaleSpesa;
  public $metodoPagamento;

  public function __construct($totaleSpesa, $metodoPagamento)
  {
    $this->totaleSpesa = $totaleSpesa;
    $this->metodoPagamento = $metodoPagamento;
  }
}
