<?php
include("includes/init.php");
?>

<html>
<head>
  <title>Total Touchdown</title>
  <h1>Total Touchdown</h1>

<?php
$lf = new loginfactory();
if ($lf->check_logged_in()) {
    $user = $_SESSION["username"];
    echo "<p>Hello $user </p>"; ?>

<a href="/users/logout.php">Logout</a>

<?php
} else {
    ?>

  <a href="/users/login.php">Login</a>
  <a href="/users/create.php">Register</a>

<?php
}

 ?>
</head>

<body>
  <br><br><br>
<a href="/games/index.php">Play Total Touchdown</a>
</body>

</html>
