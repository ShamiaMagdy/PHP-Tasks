<?php 

//? mysql:host=?;dbname=?

$db="mysql:host=localhost;dbname=flight reservation";
$con= new PDO($db,"root","");
//? query
$departure_airport=$_POST['departure_airport'];
$arrival_airport=$_POST['arrival_airport'];
$route_id = $_POST['route_id'];

$query_update ="UPDATE `routes` SET `departure_airport`='$departure_airport',`arrival_airport`='$arrival_airport' WHERE `route_id`=$route_id";
//? connection prepare
$sql= $con->prepare($query_update);
//var_dump($query_update);
//die;
$res=$sql->execute();

 var_dump($res);




?>