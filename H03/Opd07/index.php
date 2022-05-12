<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
</head>
<body>
    <?php
        $kappersagenda['Mevrouw Pietersen'] = 9.15;
        $kappersagenda['Mevrouw Willems'] = 9.30;
        $kappersagenda[] = 9.45;
        $kappersagenda['Paul van den Broek'] = 10.00;
        $kappersagenda['Karel de Meeuw'] = 10.15;
        $kappersagenda[""] = 10.30;
        
    print ("De volgende momenten zijn nog beschikbaar:<ul>");

        foreach ($kappersagenda as $afspraak => $tijd) {

            if ($afspraak == "") {
                print('<li>'.$tijd.'</li>');
            }
        }
    
    print ("</ul>");
    ?>
</body>
</html>