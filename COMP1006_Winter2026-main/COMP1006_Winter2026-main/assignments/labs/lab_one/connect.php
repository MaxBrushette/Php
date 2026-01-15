<?php
//This was really confusing, and I'm not even sure I did it correctly.
//I tried to follow the Connecting to a DB in the slides.
try{
    $db = new PDO('mysql:host=localhost;dbname=test','root','');
    echo "<p> Connected. </p>";
}
catch(Exception $e){
    echo "<p>Unable to connect" . $e->getMessage() . "</p>";
}
?>