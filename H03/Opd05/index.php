<!DOCTYPE html>
<html>
<head>
<style>
    
</style>
</head>
<body>
<?php
    $reis = 10;
    $leeftijd = 13;

    if ($leeftijd > 65) {
        $reis = $reis * 0.5;
    } else if ($leeftijd < 3) {
        $reis = 0;
    } else if ($leeftijd <= 12) {
        $reis = $reis * 0.5;
    }

    echo "Ik ben ".$leeftijd." jaar oud, dus ik betaal ".$reis." euro";
?>
</body>
</html>