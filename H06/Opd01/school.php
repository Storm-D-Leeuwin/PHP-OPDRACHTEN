<?php

$user = "schooluser";
$pass = "123456abc@";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phpschool;port=3306', $user, $pass);
    foreach($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>