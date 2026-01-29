<?php

$to = "bitumi@gmail.com";
$subject = "Customer Information";

$message = "New Customer Contact Info\n";
$message .= "\n";
$message .= "Customer: {$firstName} {$lastName}\n";
$message .= "Email Address: {$emailAddress}\n";
$message .= "Associated Mesage: {$customerMessage}\n\n";

$headers = "From: no-reply@bakeittillyoumakeit.cs\r\n";
mail($to, $subject, $message, $headers);
?>