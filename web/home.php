<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="homeStyles.css">
  <script type="text/javascript" src="js/team01.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <title>Homepage</title>
</head>
<body>


  <div class="topnav">
    <a href="home.html">Home</a>
    <a href="assignments.html">Assignments</a>
  </div>
  <div id="title">
    <h1 class="well well-lg">Dave Short</h1>
  </div></br>
  <div class="well well-sm bio">
  <p>Husband, father, webcomic artist, game developer, and all things nerdy enthusiest.</p></br>

</div></br>
<div>
  <img class="center" id="comic" src="images/HalloweenDecorations_01.gif" alt="plundercomic">
</div>
<div class="well well-sm bio">
  <p>Favorite Quote:</p>
  <p class="quote">"My common sense is tingling." - Deadpool</p>
</div>

<footer>
<?php
$t=time();
echo($t);
echo(date("Y-m-d",$t));
?>
</footer>
</body>
</html>
