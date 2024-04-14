<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$method=explode("=",$_SERVER["QUERY_STRING"]);

if($method[0]=="delete")
{
    $query_delete = "DELETE FROM `flights` WHERE `flight_id`=$method[1]";
    $sql_d = $conn->prepare($query_delete);
    $res_d = $sql_d->execute();
}

?>
<?php
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
    <?php if($method[0]=="update" && $method[1]==$flight['flight_id']): ?>
        <form action="../Update/flight.php" method="post">
        <input type="hidden" name="flight_id" value="<?php echo $flight['flight_id'] ?>">
            <td><input type="text" name="flight_number" value="<?php echo $flight['flight_number']?>"></td>
            <td><input type="text" name="departure_airport" value="<?php echo $flight["departure_airport"]?>"></td>
            <td><input type="text" name="arrival_airport" value="<?php echo $flight["arrival_airport"]?>"></td>
            <td><input type="text" name="departure_time" value="<?php echo $flight["departure_time"]?>"></td>
            <td><input type="text" name="arrival_time" value="<?php echo $flight["arrival_time"]?>"></td>
            <td> <button>save</button></td>
        </form>
        <?php else :?>
            <td><?php echo $flight["flight_number"] ?></td>
            <td><?php echo $flight["departure_airport"] ?></td>
            <td><?php echo $flight["arrival_airport"] ?></td>
            <td><?php echo $flight["departure_time"] ?></td>
            <td><?php echo $flight["arrival_time"] ?></td>
            <td> 
                <a href="<?php echo $_SERVER['PHP_SELF'].'?update='.$flight['flight_id']?>">Update</a> 
                <a href="<?php echo $_SERVER['PHP_SELF'].'?delete='.$flight['flight_id']?>">Delete</a>
            </td>
      <?php endif ?>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</body>
</html>