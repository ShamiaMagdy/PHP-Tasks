<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$query = "select * from Bookings";
$sql = $conn->prepare($query);
$res = $sql->execute();
$Bookings = $sql->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flights</title>
</head>
<body>
<table class="table table-striped table-dark table-hover">
  <thead>
    <tr>
        <th scope="col">Booking Id</th>
        <th scope="col">Passenger Id</th>
        <th scope="col">Flight Id</th>
        <th scope="col">Booking Date</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($Bookings as $Booking): ?>
    <tr>
      <th scope="row"><?php echo $Booking["booking_id"] ?></th>
      <td><?php echo $Booking["passenger_id"] ?></td>
      <td><?php echo $Booking["flight_id"] ?></td>
      <td><?php echo $Booking["booking_date"] ?></td>
      <td> 
        <a href="">Update</a> 
        <a href="">Delete</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</body>
</html>