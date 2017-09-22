<?php
include("../../includes/init.php");

$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$address = $_POST["address"];
$password = $_POST["password"];

$password = password_hash($password, PASSWORD_DEFAULT);

$user = new user($username, $firstname, $lastname, $address, $email, $password);



$userFactory = new userFactory();

//$userFactory->checkUsername($username);
  $userFactory->insertUser($user);


header("Location: /users/index.php")

?>
