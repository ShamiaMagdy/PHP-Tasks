<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$method=explode("=",$_SERVER["QUERY_STRING"]);

if($method[0]=="delete"){
    $query_delete ="DELETE FROM `seats` WHERE `seat_id`='$method[1]'";
    $sql= $conn->prepare($query_delete);
    $res=$sql->execute();
}
?>

<?php

$query ="SELECT * from seats";
$sql= $conn->prepare($query);
$res=$sql->execute();
$seats= $sql->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Routes</title>
</head>

<body>
  <table class="table table-dark table-striped w-100 text-center   align-items-center m-auto ">
    <thead> 
      <tr> 
      <th scope="col">seat_id</th>
        <th scope="col">flight_id</th>
        <th scope="col">seat_number</th>
        <th scope="col">class</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($seats as $seat) :      ?> 
        <tr>
          <th scope="row"><?php echo $seat['seat_id']  ?></th>
          <?php if($method[0]=="update"&&$method[1]==$seat['seat_id']): ?>
            <form action="../Update/seat.php" method="post">
            <input type="hidden" name="seat_id" value="<?php echo $seat['seat_id'] ?>">
            <td><input type="text" name="flight_id"  value="<?php echo $seat['flight_id']  ?>"></td>
            <td><input type="text" name="seat_number" value="<?php echo $seat['seat_number']  ?>"></td>
            <td><input type="text" name="class" value="<?php echo $seat['class']  ?>"></td>
            <td> <button>save</button></td>
            </form>
          <?php else:?>
            <td><?php echo $seat["flight_id"] ?></td>
            <td><?php echo $seat["seat_number"] ?></td>
            <td><?php echo $seat["class"] ?></td>

          <td>
          <a href="<?php echo $_SERVER["PHP_SELF"].'?delete='.$seat['seat_id']?>">delete</a>
          <a href="<?php echo $_SERVER["PHP_SELF"].'?update='.$seat['seat_id']?>">update</a>
        </td>
          <?php endif?>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>

</html>