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
  var_dump($_SESSION);
echo "<p>Hello $user </p>";
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

</body>

</html>
