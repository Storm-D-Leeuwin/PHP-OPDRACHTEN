<?php

include_once('Programma.php');

$ditprogramma = new Programma();
$ditprogramma->setNaam('Mijn eerste programma');
$ditprogramma->setOmschrijving('Even testen');

foreach ($ditprogramma->getProgramma() as $p) {
    echo $p . "<br>";
}
