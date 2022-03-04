<?php

trait CartaDiCredito
{
  private $numero;
  private $banca;
  private $saldo;
  private $scadenza;

  public function getIndirizzo()
  {
    return "$this->numero $this->banca $this->saldo $this->scadenza";
  }

  public function setAddress($numero, $banca, $saldo, $scadenza)
  {
    $this->setNumero($numero);
    $this->setBanca($banca);
    $this->setSaldo($saldo);
    $this->setScadenza($scadenza);
  }

  /**
   * Get the value of Numero
   */
  public function getNumero()
  {
    return $this->numero;
  }

  /**
   * Set the value of Numero
   */
  public function setNumero()
  {
    return $this->numero;
  }

  /**
   * Get the value of Banca
   */
  public function getBanca()
  {
    return $this->banca;
  }

  /**
   * Set the value of Banca
   */
  public function setBanca()
  {
    return $this->banca;
  }

  /**
   * Get the value of Saldo
   */
  public function getSaldo()
  {
    return $this->saldo;
  }

  /**
   * Set the value of Saldo
   */
  public function setSaldo()
  {
    return $this->saldo;
  }

  /**
   * Get the value of Scadenza
   */
  public function getScadenza()
  {
    return $this->scadenza;
  }

  /**
   * Set the value of Scadenza
   */
  public function setScadenza()
  {
    return $this->scadenza;
  }
}
