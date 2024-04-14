<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$query = "select * from flights";
$sql = $conn->prepare($query);
$res = $sql->execute();
$flights = $sql->fetchAll(PDO::FETCH_ASSOC);


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
        <th scope="col">Flight id</th>
        <th scope="col">Flight Number</th>
        <th scope="col">Departure Airport</th>
        <th scope="col">Arrival Airport</th>
        <th scope="col">Departure Time</th>
        <th scope="col">Arrival Time</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($flights as $flight): ?>
    <tr>
      <th scope="row"><?php echo $flight["flight_id"] ?></th>
      <td><?php echo $flight["flight_number"] ?></td>
      <td><?php echo $flight["departure_airport"] ?></td>
      <td><?php echo $flight["arrival_airport"] ?></td>
      <td><?php echo $flight["departure_time"] ?></td>
      <td><?php echo $flight["arrival_time"] ?></td>
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