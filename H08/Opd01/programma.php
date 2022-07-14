<?php

class Programm
{
  private $naam = "";
  private $omschrijving = "";
  private $liedjes = array();

  public function voegLiedjeToe($liedje)
  {
    $this->liedjes[] = $liedje;
  }

  public function getLiedjes()
  {
    return $this->liedjes;
  }

  /*
    * Geeft programma informatie terug
    * @return mixed
    */

  public function getProgramma()
  {
    return array(
      "naam" => $this->naam,
      "omschrijving" => $this->omschrijving
    );
  }

  //Geeft het programma een naam
  //@param de naam als string

  public function setNaam($n)
  {
    if (strlen($n) >= 2) {
      $this->naam = $n;
    }
  }

  //Geeft het programma een omschrijving
  //@param de omschrijving als string

  public function setOmschrijving($o)
  {
    $this->omschrijving = $o;
  }

  //Retourneert naam van het programma
  //@param de omschrijving als string

  public function getNaam()
  {
    return $this->naam;
  }

  //Retourneert omschrijving van het programma
  //@param de omschrijving als string

  public function getOmschrijving()
  {
    return $this->omschrijving;
  }
}
