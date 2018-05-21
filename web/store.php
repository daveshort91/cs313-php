
<?php
// Start the session
session_start();
?>
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
       echo "<td>";
       echo "<form class='add-to-cart-form'>";
       echo "<div class='item-id'>" . $key . "</div>";
       echo "<button type='submit'>Add</button>";
       echo "</td>";
       echo "<td>";
       echo $value;
       echo "</td>";
       echo "</tr>";
     }
      ?>
      <script>
          $(document).ready(function(){
            $('.add-to-cart-form').on('submit', function(){

                var id = $(this).find('.product-id').text();

                window.location.href = "add_to_cart.php?id=" + id;
                return false;
            });
          });
      </script>
   </table>
  </div>


</body>
</html>
