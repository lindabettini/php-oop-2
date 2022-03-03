<?php

class Cliente
{
  public $nome;
  public $cognome;


  public function __construct($nome, $cognome)
  {
    $this->nome = $nome;
    $this->cognome = $cognome;
  }
}

$firstCliente = new Cliente('Linda', 'Bettini');
