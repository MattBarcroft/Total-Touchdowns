<?php
include("includes/init.php");
?>

<html>
<head>
  <title>Total Touchdown</title>
  <h1>Total Touchdown</h1>

<?
$lf = new loginfactory();
if ($lf->check_logged_in()) {
  $user = $_SESSION["username"];
echo "<p>Hello $user </p>";
?>

<a href="http://localhost:8081/users/logout.php">Logout</a>

<?
}
else {
  ?>

  <a href="http://localhost:8081/users/login.php">Login</a>
  <a href="http://localhost:8081/users/create.php">Register</a>

<?
}

 ?>
</head>

<body>
  <br><br><br>
<a href="http://localhost:8081/games/index.php">Play Total Touchdown</a>
</body>

</html>
