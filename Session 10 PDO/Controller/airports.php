<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$query = "select * from Airports";
$sql = $conn->prepare($query);
$res = $sql->execute();
$airports = $sql->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airports</title>
</head>
<body>
<table class="table table-striped table-dark table-hover">
  <thead>
    <tr>
        <th scope="col">Airport Code</th>
        <th scope="col">Airport Name</th>
        <th scope="col">Location</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($airports as $airport): ?>
    <tr>
      <th scope="row"><?php echo $airport["airport_code"] ?></th>
      <td><?php echo $airport["airport_name"] ?></td>
      <td><?php echo $airport["location"] ?></td>
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