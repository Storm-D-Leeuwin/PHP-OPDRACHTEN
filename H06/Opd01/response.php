<?php

if ($_POST['email'] == "piet@worldonline.nl" && $_POST['wachtwoord'] == "doetje123" ||
    $_POST['email'] == "klaas@carpets.nl" && $_POST['wachtwoord'] == "snoepje777" ||
    $_POST['email'] == "truushendriks@wegweg.nl" && $_POST['wachtwoord'] == "arkiearkie201"
    ) {
        echo "Welkom";
    } else {
        echo "Sorry, geen toegang"."<br>";
        echo "<a href= 'form.html'>Terug</a>";
    };

$return = false;

function monkey () {
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    if ($email == "piet@worldonline.nl" && $wachtwoord == "doetje123") {
        $return = true;
    };
};