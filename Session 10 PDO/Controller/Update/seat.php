<?php 

//? mysql:host=?;dbname=?

$db="mysql:host=localhost;dbname=flight reservation";
$con= new PDO($db,"root","");
//? query
$flight_id=$_POST['flight_id'];
$seat_number=$_POST['seat_number'];
$class=$_POST['class'];
$seat_id = $_POST['seat_id'];
$query_update ="UPDATE `seats` SET `flight_id`=$flight_id,`seat_number`=$seat_number,`class`='$class' WHERE `seat_id`=$seat_id";
//? connection prepare
$sql= $con->prepare($query_update);
//var_dump($query_update);
//die;
$res=$sql->execute();

 var_dump($res);




?>