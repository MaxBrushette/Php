<?php
// Turn on error reporting so syntax and runtime errors are visible during development
ini_set('display_errors', 1);
error_reporting(E_ALL);


$host = "localhost";
$db = "Week3PHP";
$username = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$db";

try {
    
    $pdo = new PDO($dsn,$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<p>Connected to database!</p>";
}
catch (PDOException $e) {
    die("Database Error" . $e->getMessage());
}
