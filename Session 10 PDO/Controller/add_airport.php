<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$query = "INSERT INTO `airports`(`airport_code`, `airport_name`, `location`) VALUES (?,?,?)";
$sql = $conn->prepare($query);
$airport_code=$_POST["airport_code"];
$airport_name=$_POST["airport_name"];
$location=$_POST["location"];
$res = $sql->execute([$airport_code,$airport_name,$location]);
if($res==true)
{
    echo 'Airport Added sucessfully ^_^';
}

?>