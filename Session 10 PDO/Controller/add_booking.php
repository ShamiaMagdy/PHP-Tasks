<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$query = "INSERT INTO `bookings`(`passenger_id`, `flight_id`, `booking_date`) VALUES (?,?,?)";
$sql = $conn->prepare($query);
$passenger_id=$_POST["passenger_id"];
$flight_id=$_POST["flight_id"];
$booking_date=$_POST["booking_date"];
$res = $sql->execute([$passenger_id,$flight_id,$booking_date]);
if($res==true)
{
    echo 'Booking Added sucessfully ^_^';
}

?>