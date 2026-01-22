<?php 
require "connect.php";
require "header.php"; 
include "car.php";
//Making the car using 2 strings and an integer.
$car = new Car("Blue","Big",2000);
//Calling on the getCarInfo function
echo $car->getCarInfo();
include "footer.php";

/*
The hardest part of the lab was remembering how to call on functions and set them up outside of the class, as well as remembering what exactly does what, like the this->make = $make; line.

The easiest part was making the functions since I just followed what we did in class today.
*/