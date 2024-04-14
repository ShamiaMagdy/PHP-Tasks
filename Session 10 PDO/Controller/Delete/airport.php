<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$method=explode("=",$_SERVER["QUERY_STRING"]);

if($method[0]=="delete"){
    $query_delete ="DELETE FROM `airports` WHERE `airport_code`='$method[1]'";
$sql= $conn->prepare($query_delete);
$res=$sql->execute();
}
?>

<?php

$query ="SELECT * from airports";
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
  <title>Airports</title>
</head>

<body>
  <table class="table table-dark table-striped w-100 text-center   align-items-center m-auto ">
    <thead>
      <tr> 
        <th scope="col">airport_code</th>
        <th scope="col">airport_name</th>
        <th scope="col">location</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($airports as $airport) :      ?> 
        <tr>
          <th scope="row"><?php echo $airport['airport_code']  ?></th>
          <?php if($method[0]=="update"&&$method[1]==$airport['airport_code']): ?>
            <form action="../Update/airport.php" method="post">
            <td><input type="text" name="airport_name"  value="<?php echo $airport['airport_name']  ?>"></td>
            <input type="hidden" name="airport_code" value="<?php echo $airport['airport_code'] ?>">
            <td><input type="text" name="location" value="<?php echo $airport['location']  ?>"></td>
            <td> <button>save</button></td>
            </form>
          <?php else:?>
            <td><?php echo $airport['airport_name']  ?></td>
            <td><?php echo $airport['location']  ?></td>

          <td>
          <a href="<?php echo $_SERVER["PHP_SELF"].'?delete='.$airport['airport_code']?>">delete</a>
          <a href="<?php echo $_SERVER["PHP_SELF"].'?update='.$airport['airport_code']?>">update</a>
        </td>
          <?php endif?>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>

</html>