<?php
$host="localhost";
$username="root";
$password="";
$dbname="flight reservation";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$method=explode("=",$_SERVER["QUERY_STRING"]);

if($method[0]=="delete")
{
    $query_delete = "DELETE FROM `passengers` WHERE `passenger_id`=$method[1]";
    $sql_d = $conn->prepare($query_delete);
    $res_d = $sql_d->execute();
}

?>
<?php
$query = "select * from passengers";
$sql = $conn->prepare($query);
$res = $sql->execute();
$passengers = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passengers</title>
</head>
<body>
<table class="table table-striped table-dark table-hover">
  <thead>
    <tr>
    <tr>
        <th scope="col">passenger_id</th>
        <th scope="col">first_name</th>
        <th scope="col">last_name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        <th scope="col">Action</th>
    </tr>
    </tr>
  </thead>
  <tbody>
    <?php foreach($passengers as $passenger): ?>
    <tr>
    <th scope="row"><?php echo $passenger["passenger_id"] ?></th>
    <?php if($method[0]=="update" && $method[1]==$passenger['passenger_id']): ?>
        <form action="../Update/passenger.php" method="post">
        <input type="hidden" name="passenger_id" value="<?php echo $passenger['passenger_id'] ?>">
            <td><input type="text" name="first_name" value="<?php echo $passenger['first_name']?>"></td>
            <td><input type="text" name="last_name" value="<?php echo $passenger["last_name"]?>"></td>
            <td><input type="text" name="email" value="<?php echo $passenger["email"]?>"></td>
            <td><input type="text" name="phone" value="<?php echo $passenger["phone"]?>"></td>
            <td> <button>save</button></td>
        </form>
        <?php else :?>
            <td><?php echo $passenger["first_name"] ?></td>
            <td><?php echo $passenger["last_name"] ?></td>
            <td><?php echo $passenger["email"] ?></td>
            <td><?php echo $passenger["phone"] ?></td>
            <td> 
                <a href="<?php echo $_SERVER['PHP_SELF'].'?update='.$passenger['passenger_id']?>">Update</a> 
                <a href="<?php echo $_SERVER['PHP_SELF'].'?delete='.$passenger['passenger_id']?>">Delete</a>
            </td>
      <?php endif ?>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</body>
</html>