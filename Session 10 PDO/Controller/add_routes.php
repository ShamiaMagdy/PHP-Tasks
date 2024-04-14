<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$query = "INSERT INTO `routes`( `departure_airport`, `arrival_airport`) VALUES (?,?)";
$sql = $conn->prepare($query);
$departure_airport=$_POST["departure_airport"];
$arrival_airport=$_POST["arrival_airport"];
$res = $sql->execute([$departure_airport,$arrival_airport]);
if($res==true)
{
    echo 'Route Added sucessfully ^_^';
}

?>