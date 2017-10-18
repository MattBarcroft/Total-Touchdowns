<?php
include("../../includes/init.php");

$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$address = $_POST["address"];
$password = $_POST["password"];

$password = password_hash($password, PASSWORD_DEFAULT);

$user = new user();
$user->user_Construct($username, $firstname, $lastname, $address, $email, $password);


$userFactory = new userFactory();

  $userFactory->insertUser($user);

$loginfactory = new loginfactory();
$loginfactory->create_session($username, $password);

header("Location: /index.php")

?>
