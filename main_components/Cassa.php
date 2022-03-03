<?php
class Cassa
{
  public $metodoPagamento;

  public function __construct($metodoPagamento)
  {
    $this->metodoPagamento = $metodoPagamento;
  }
}
