<?php

include_once('Programma.php');
include_once('Liedjes.php');

$ditprogramma = new Programma();
$ditprogramma->setNaam('Mijn eerste programma');
$ditprogramma->setOmschrijving('Even testen');

foreach ($ditprogramma->getProgramma() as $p) {
  echo $p . "<br>";
}

$nieuwliedje = new Liedje('dit is de titel', 'rolling stones');

$ditprogramma->voegLiedjeToe($nieuwliedje);

foreach ($ditprogramma->getLiedjes() as $liedje) {
  echo $liedje->getTitel() . " - " . $liedje->getArtiest() . "<br>";
}
