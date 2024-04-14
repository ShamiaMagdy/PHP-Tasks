<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$method=explode("=",$_SERVER["QUERY_STRING"]);

if($method[0]=="delete"){
    $query_delete ="DELETE FROM `bookings` WHERE `booking_id`='$method[1]'";
    $sql= $conn->prepare($query_delete);
    $res=$sql->execute();
}
?>

<?php

$query ="SELECT * from bookings";
$sql= $conn->prepare($query);
$res=$sql->execute();
$airports= $sql->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bookings</title>
</head>

<body>
  <table class="table table-dark table-striped w-100 text-center   align-items-center m-auto ">
    <thead> 
      <tr> 
        <th scope="col">booking_id</th>
        <th scope="col">passenger_id</th>
        <th scope="col">flight_id</th>
        <th scope="col">booking_date</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($airports as $airport) :      ?> 
        <tr>
          <th scope="row"><?php echo $airport['booking_id']  ?></th>
          <?php if($method[0]=="update"&&$method[1]==$airport['booking_id']): ?>
            <form action="../Update/booking.php" method="post">
            <td><input type="text" name="passenger_id"  value="<?php echo $airport['passenger_id']  ?>"></td>
            <input type="hidden" name="booking_id" value="<?php echo $airport['booking_id'] ?>">
            <td><input type="text" name="flight_id" value="<?php echo $airport['flight_id']  ?>"></td>
            <td><input type="text" name="booking_date" value="<?php echo $airport['booking_date']  ?>"></td>
            <td> <button>save</button></td>
            </form>
          <?php else:?>
            <td><?php echo $airport['passenger_id']  ?></td>
            <td><?php echo $airport['flight_id']  ?></td>
            <td><?php echo $airport['booking_date']  ?></td>

          <td>
          <a href="<?php echo $_SERVER["PHP_SELF"].'?delete='.$airport['booking_id']?>">delete</a>
          <a href="<?php echo $_SERVER["PHP_SELF"].'?update='.$airport['booking_id']?>">update</a>
        </td>
          <?php endif?>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>

</html>