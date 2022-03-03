<?php
require_once __DIR__ . '/Cliente.php';

class ClienteIscritto extends Cliente
{
  public $nomeUtente;
  public $password;
  public $sconto;

  public function __construct($nome, $cognome, $nomeUtente, $password, $sconto = 20)
  {
    return parent::__construct($nome, $cognome);
    $this->nomeUtente = $nomeUtente;
    $this->password = $password;
    $this->sconto = $sconto;
  }
}
