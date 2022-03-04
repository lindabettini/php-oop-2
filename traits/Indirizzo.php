<?php

trait Indirizzo
{
  private $via;
  private $citta;
  private $regione;
  private $nazione;
  private $codice_postale;

  public function getIndirizzo()
  {
    return "$this->via $this->citta $this->regione $this->nazione $this->codice_potale";
  }

  public function setAddress($via, $citta, $regione, $nazione, $codice_postale)
  {
    $this->setVia($via);
    $this->setCitta($citta);
    $this->setRegione($regione);
    $this->setNazione($nazione);
    $this->setCodice_postale($codice_postale);
  }

  /**
   * Get the value of Via
   */
  public function getVia()
  {
    return $this->via;
  }

  /**
   * Set the value of Via
   */
  public function setVia()
  {
    return $this->via;
  }

  /**
   * Get the value of  Citta'
   */
  public function getCitta()
  {
    return $this->via;
  }

  /**
   * Set the value of Citta'
   */
  public function setCitta()
  {
    return $this->via;
  }

  /**
   * Get the value of Regione
   */
  public function getRegione()
  {
    return $this->via;
  }

  /**
   * Set the value of Regione
   */
  public function setRegione()
  {
    return $this->via;
  }

  /**
   * Get the value of Nazione
   */
  public function getNazione()
  {
    return $this->via;
  }

  /**
   * Set the value of Nazione
   */
  public function setNazione()
  {
    return $this->via;
  }

  /**
   * Get the value of Codice_postale
   */
  public function getCodicePostale()
  {
    return $this->via;
  }

  /**
   * Set the value of Codice_postale
   */
  public function setCodicePostale()
  {
    return $this->via;
  }
}
