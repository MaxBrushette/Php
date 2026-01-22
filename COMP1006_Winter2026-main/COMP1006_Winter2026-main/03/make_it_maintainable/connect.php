<?php /*The connecting.php. I didn't know whether or not we needed this but it was nice to include since I ended up having an error during development. */

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
    //So I get the message on what went wrong I think ^
}