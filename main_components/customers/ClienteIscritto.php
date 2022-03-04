<?php
require_once __DIR__ . '/Cliente.php';

class ClienteIscritto extends Cliente
{
  public $nomeUtente;
  public $password;
  public $indirizzo;
  public $sconto;

  public function __construct($nome, $cognome, $nomeUtente, $password, $indirizzo, $sconto = 20)
  {
    parent::__construct($nome, $cognome);
    $this->nomeUtente = $nomeUtente;
    $this->password = $password;
    $this->indirizzo = $indirizzo;
    $this->sconto = $sconto;
  }
}

$secondClient = new ClienteIscritto('Pinco', 'Panco', 'PincoPallino', 'topsecret!1', 20);
