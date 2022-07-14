<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr Wheely</title>
</head>

<body>

    <form action="index.php" method="get">
        <label for="merknaam">Merk: </label>
        <select name="merknaam" id="merknaam">
            <option value="Alle">Alle</option>
            <option value="Audi">Audi</option>
            <option value="Ferrari">Ferrari</option>
            <option value="Fiat">Fiat</option>
            <option value="Opel">Opel</option>
        </select>


        <label for="minPrijs">Minimale prijs:</label>
        <input type="text" name="minPrijs" id="minPrijs">

        <label for="maxPrijs">Maximale prijs:</label>
        <input type="text" name="maxPrijs" id="maxPrijs">

        <input type="submit">
    </form>

    <?php

    require('Auto.php');
    require('Autooverzicht.php');

    $minPrijs = isset($_GET['minPrijs']) && !empty($_GET['minPrijs']) ? $minPrijs = $_GET['minPrijs'] : 0;
    $maxPrijs = isset($_GET['maxPrijs']) && !empty($_GET['maxPrijs']) ? $maxPrijs = $_GET['maxPrijs'] : 99999999999999999;
    $merk = isset($_GET['merknaam']) ? $_GET['merknaam'] : 'Alle';

    $autoos = new Autooverzicht();
    $autoos->voegAutoToe('Opel', 300, '//unsplash.it/202/98');

    foreach ($autoos->getGefilterdeLijst($merk, $minPrijs, $maxPrijs) as $auto) {
        echo $auto->getMerk() . ' - ' . $auto->getPrijs() . '<br>';
        echo '<img src="' . $auto->getImageUrl() . '" alt="Plaatje van auto">' . '<br>';
    }

    ?>

</body>

</html>