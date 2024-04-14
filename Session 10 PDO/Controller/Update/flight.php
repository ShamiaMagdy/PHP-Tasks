<?php 

//? mysql:host=?;dbname=?

$db="mysql:host=localhost;dbname=flight reservation";
$con= new PDO($db,"root","");
//? query
$flight_number=$_POST['flight_number'];
$departure_airport=$_POST['departure_airport'];
$arrival_airport = $_POST['arrival_airport'];
$departure_time = $_POST['departure_time'];
$arrival_time = $_POST['arrival_time'];
$flight_id = $_POST['flight_id'];
$query_update ="UPDATE `flights` SET `flight_number`='$flight_number',`departure_airport`='$departure_airport',`arrival_airport`='$arrival_airport',`departure_time`='$departure_time',`arrival_time`='$arrival_time' WHERE `flight_id`=$flight_id";
//? connection prepare
$sql= $con->prepare($query_update);
//var_dump($query_update);
//die;
$res=$sql->execute();

 var_dump($res);




?>