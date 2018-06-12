<?php
  require "connectdb.php";
  $db = get_db();

 ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="homeStyles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Entries</title>
</head>
<body>
  <?php
    require 'navbar.php';

  ?>
  <h1>Contestants</h1><br>

  <div>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>


<?php

$statement = $db->prepare("SELECT n.first_name AS first, n.last_name AS last, e.email AS email FROM names n INNER JOIN users u ON u.name_id = n.id INNER JOIN emails e ON u.email_id = e.id");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
    echo '<tr>';
    echo '<td>' . $row['first'] . ' ' . $row['last'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '</tr>';
}


 ?>
    </table>
  </div>





</body>
</html>
