<?php
//namespaces $_SESSION["userId"] = $user->id; redirectwithmessage
include("../../includes/init.php");

$username = $_POST["username"];
$password = $_POST["password"];

$loginfactory = new loginfactory();
$bool = $loginfactory->check_login($username, $password);
$loginfactory->create_session($username, $password);
if ($bool == true) {
  header("Location: ../../index.php");
}
else {
  echo "<p>Username or password incorrect</p>";
}


 ?>
