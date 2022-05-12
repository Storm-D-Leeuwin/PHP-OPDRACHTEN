<!DOCTYPE html>
<html>
<head>
<style>
    body {
        text-align: center;
    }
    .rood {
        border: red solid 3px;
    }
    .groen {
        border: green solid 3px;
    }
</style>
</head>
<body>
<?php
    for ($i = 1; $i <= 9; $i++) {
        if ($i % 2 == 0) {
            $class = "class='rood'";
        } else {
            $class = "class='groen'";
        }
        echo "<img ".$class. "src='apen/aap".$i.".jpg'>";
}
?>
</body>
</html>