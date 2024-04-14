<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$method=explode("=",$_SERVER["QUERY_STRING"]);

if($method[0]=="delete"){
    $query_delete ="DELETE FROM `routes` WHERE `route_id`='$method[1]'";
    $sql= $conn->prepare($query_delete);
    $res=$sql->execute();
}
?>

<?php

$query ="SELECT * from routes";
$sql= $conn->prepare($query);
$res=$sql->execute();
$routes= $sql->fetchAll(PDO::FETCH_ASSOC);
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
      <th scope="col">route_id</th>
        <th scope="col">departure_airport</th>
        <th scope="col">arrival_airport</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($routes as $route) :      ?> 
        <tr>
          <th scope="row"><?php echo $route['route_id']  ?></th>
          <?php if($method[0]=="update"&&$method[1]==$route['route_id']): ?>
            <form action="../Update/route.php" method="post">
            <input type="hidden" name="route_id" value="<?php echo $route['route_id'] ?>">
            <td><input type="text" name="departure_airport"  value="<?php echo $route['departure_airport']  ?>"></td>
            <td><input type="text" name="arrival_airport" value="<?php echo $route['arrival_airport']  ?>"></td>
            <td> <button>save</button></td>
            </form>
          <?php else:?>
            <td><?php echo $route["departure_airport"] ?></td>
            <td><?php echo $route["arrival_airport"] ?></td>

          <td>
          <a href="<?php echo $_SERVER["PHP_SELF"].'?delete='.$route['route_id']?>">delete</a>
          <a href="<?php echo $_SERVER["PHP_SELF"].'?update='.$route['route_id']?>">update</a>
        </td>
          <?php endif?>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>

</html>