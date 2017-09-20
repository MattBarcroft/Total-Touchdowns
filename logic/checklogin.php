<?php
include("../includes/init.php");

$username = $_POST["username"];
$password = $_POST["password"];

$loginfactory = new loginfactory();
$bool = $loginfactory->check_login($username, $password);

if ($bool == true) {
  header("Location: ../webpages/index.php");
}
else {
  echo "<p>Username or password incorrect</p>";
}


 ?>
