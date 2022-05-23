<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function temperatuur ($celcius) {
        $fahrenheit = ($celcius * 1.8) + 32;
        echo "<li>".$celcius." graden = ".$fahrenheit." Fahrenheit"."</li>";
    }

    function deelbaar ($nummer) {
        if ($nummer % 3 == 0) {
            echo "<li>".'Het getal '.$nummer." is deelbaar door 3"."</li>";
        } else {
            echo "<li>".'Het getal '.$nummer." is niet deelbaar door 3"."</li>";
        }
    }

    function s ($string) {
        echo "<li>".strrev($string)."</li>";
    }

    temperatuur(10);
    deelbaar(3);
    s('Storm');
    
    
    ?>
</body>
</html>