<?php 

//? mysql:host=?;dbname=?

$db="mysql:host=localhost;dbname=flight reservation";
$con= new PDO($db,"root","");
//? query
$passenger_id=$_POST['passenger_id'];
$flight_id=$_POST['flight_id'];
$booking_date = $_POST['booking_date'];
$booking_id = $_POST['booking_id'];
$query_update ="UPDATE `bookings` SET `passenger_id`=$passenger_id,`flight_id`=$flight_id,`booking_date`='$booking_date' WHERE `booking_id`=$booking_id";
//? connection prepare
$sql= $con->prepare($query_update);
//var_dump($query_update);
//die;
$res=$sql->execute();

 var_dump($res);




?>