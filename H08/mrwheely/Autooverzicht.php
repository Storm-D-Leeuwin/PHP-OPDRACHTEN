<?php



class Autooverzicht
{
    private $autoos;

    function __construct()
    {
        $this->autoos = [
            new Auto('Audi', 102500.00, '//unsplash.it/200/100'),
            new Auto('Ferrari', 99500.00, '//unsplash.it/199/99'),
            new Auto('Fiat', 10500.00, '//unsplash.it/201/101')
        ];
    }

    function getAutoLijst()
    {
        return $this->autoos;
    }

    function voegAutoToe($merk, $prijs, $image_url)
    {
        $newAuto = new Auto($merk, $prijs, $image_url);
        $this->autoos[] = $newAuto;
    }

    function getGefilterdeLijst($merk, $minPrijs, $maxPrijs)
    {
        $gefilderdeLijst = [];
        foreach ($this->autoos as $auto) {
            if ($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs) {
                if ($merk == 'Alle') {
                    $gefilderdeLijst[] = $auto;
                } else if ($merk == $auto->getMerk()) {
                    $gefilderdeLijst[] = $auto;
                }
            }
        }
        return $gefilderdeLijst;
    }
}
