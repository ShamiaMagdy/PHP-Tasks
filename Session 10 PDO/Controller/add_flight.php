<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$query = "INSERT INTO `flights`(`flight_number`, `departure_airport`, `arrival_airport`, `departure_time`, `arrival_time`) VALUES(?,?,?,?,?)";
$sql = $conn->prepare($query);
$flight_number=$_POST["flight_number"];
$departure_airport=$_POST["departure_airport"];
$arrival_airport=$_POST["arrival_airport"];
$departure_time=$_POST["departure_time"];
$arrival_time=$_POST["arrival_time"];
$res = $sql->execute([$flight_number,$departure_airport,$arrival_airport,$departure_time,$arrival_time]);
if($res==true)
{
    echo 'Flight Added sucessfully ^_^';
}

?>