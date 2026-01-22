<?php
//This was really confusing, and I'm not even sure I did it correctly.
//I tried to follow the Connecting to a DB in the slides.

$host = "localhost";
$db = "Week3PHP";
$user = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$db";

try{
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p> Connected :) </p>";
}
catch(PDOException $e){
    die("Not Connected :(" . $e->getMessage());
}

//PDO tries to connect, if it fails, PHP creates a PDOException object that object contains an error message.