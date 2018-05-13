

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="homeStyles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <title>Store</title>
</head>
<body>
  <?php
  $items = array("Dagger" => "2", "Hook hand" => "10", "Light Mace" => "5",
  "Longspear" => "5", "Light Crossbow" => "35");

   ?>
  <div class="topnav">
    <a href="home.html">Home</a>
    <a href="assignments.html">Assignments</a>
    <a href="cart.php">Your Cart</a>
  </div>
  <div>
    <table>
      <tr>
        <th>Item</th>
        <th>Price</th>
      </tr>
      <?php
      foreach ($items as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value . "gp </td>"
        echo '<button type="button">Add</button>'
        echo "</tr>"
      }
       ?>
    </table>
  </div>

<footer>
</footer>
</body>
</html>
