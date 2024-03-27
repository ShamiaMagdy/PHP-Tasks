<?php
$title=$_POST["BTitle"];
$publisher=$_POST["Publisher"];
$Author=$_POST["Author"];
$Genre=$_POST["Genre"];
$ISBN=$_POST["ISBN"];
$Quantity=$_POST["Quantity"];

$host="localhost";
$username="root";
$password="";
$dbname="library";
$conn= mysqli_connect($host, $username, $password,  $dbname);
$query="INSERT INTO `book`(`Title`, `AuthorID`, `PublisherID`, `GenreID`, `ISBN`, `QuantityAvailable`) VALUES ('$title',$Author,$publisher,$Genre,'$ISBN',$Quantity)";
mysqli_query($conn,$query);

?>


