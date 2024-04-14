<?php 

//? mysql:host=?;dbname=?

$db="mysql:host=localhost;dbname=flight reservation";
$con= new PDO($db,"root","");
//? query
$airport_name=$_POST['airport_name'];
$location=$_POST['location'];
$airport_code = $_POST['airport_code'];
$query_update ="UPDATE `airports` SET `airport_name`='$airport_name',`location`='$location' WHERE `airport_code` = '$airport_code'";
//? connection prepare
$sql= $con->prepare($query_update);
//var_dump($query_update);
//die;
$res=$sql->execute();

 var_dump($res);




?>