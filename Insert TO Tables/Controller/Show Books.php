<?php

$host="localhost";
$username="root";
$password="";
$dbname="library";
$conn= mysqli_connect($host, $username, $password,  $dbname);

$query_Show = "SELECT `BookID`, `Title`, `AuthorID`, `PublisherID`, `GenreID`, `ISBN`, `QuantityAvailable` FROM `book`";
$select = mysqli_query($conn, $query_Show);
$classes = $select->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Classes</title>
</head>

<body>
  <table class="table table-dark table-striped w-100 text-center   align-items-center m-auto ">
    <thead>
      <tr>
        <th scope="col">Book ID</th>
        <th scope="col">Title</th>
        <th scope="col">Author ID</th>
        <th scope="col">Publisher ID</th>
        <th scope="col">Genre ID</th>
        <th scope="col">ISBN</th>
        <th scope="col">Quantity Available</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($classes as $class) :      ?>
        <tr>
          <th scope="row"><?php echo $class['BookID']  ?></th>
          <td><?php echo $class['Title']  ?></td>
          <td><?php echo $class['AuthorID']  ?></td>
          <td><?php echo $class['PublisherID']  ?></td>
          <td><?php echo $class['GenreID']  ?></td>
          <td><?php echo $class['ISBN']  ?></td>
          <td><?php echo $class['QuantityAvailable']  ?></td>

        </tr>
      <?php endforeach      ?>
    </tbody>
  </table>
</body>

</html>