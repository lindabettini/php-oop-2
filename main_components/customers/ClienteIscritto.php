<?php
require_once __DIR__ . '/Cliente.php';
require_once __DIR__ . '/../traits/Indirizzo.php';

class ClienteIscritto extends Cliente
{
  use Indirizzo;
  public $nomeUtente;
  public $password;
  public $sconto;

  public function __construct($nome, $cognome, $nomeUtente, $password, $sconto = 20)
  {
    parent::__construct($nome, $cognome);
    $this->nomeUtente = $nomeUtente;
    $this->password = $password;
    $this->sconto = $sconto;
  }
}

$secondClient = new ClienteIscritto('Pinco', 'Panco', 'PincoPallino', 'topsecret!1', 20);
