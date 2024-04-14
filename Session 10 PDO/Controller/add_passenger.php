<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$query = "INSERT INTO `passengers`(`first_name`, `last_name`, `email`, `phone`) VALUES (?,?,?,?)";
$sql = $conn->prepare($query);
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$res = $sql->execute([$first_name,$last_name,$email,$phone]);
if($res==true)
{
    echo 'Passenger Added sucessfully ^_^';
}

?>