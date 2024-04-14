<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$query = "INSERT INTO `seats`(`flight_id`, `seat_number`, `class`) VALUES (?,?,?)";
$sql = $conn->prepare($query);
$flight_id=$_POST["flight_id"];
$seat_number=$_POST["seat_number"];
$class=$_POST["class"];
$res = $sql->execute([$flight_id,$seat_number,$class]);
if($res==true)
{
    echo 'Seat Added sucessfully ^_^';
}

?>