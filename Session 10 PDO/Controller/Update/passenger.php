<?php 

//? mysql:host=?;dbname=?

$db="mysql:host=localhost;dbname=flight reservation";
$con= new PDO($db,"root","");
//? query
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$passenger_id = $_POST['passenger_id'];
$query_update ="UPDATE `passengers` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`phone`='$phone' WHERE `passenger_id`=$passenger_id";
//? connection prepare
$sql= $con->prepare($query_update);
//var_dump($query_update);
//die;
$res=$sql->execute();

 var_dump($res);




?>