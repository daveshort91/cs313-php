<?php
  require "connectdb.php";
  $db = get_db();

 ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="homeStyles.css">
  <script type="text/javascript" src="js/team01.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Assignments</title>
</head>
<body>
  <?php
    require 'navbar.php';

  ?>

  <div>
    <h1 class="well well-md">Register New Contestant</h1>
  </div>

<?php
$statement = $db->prepare("SELECT image FROM entries");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
    // header('Content-type: image/jpeg');
    echo '<img src="data:image/jpg;base64,' . $row['image']) . '">';
    // echo pg_unescape_bytea($row['image']);

}


 ?>

</body>
</html>
