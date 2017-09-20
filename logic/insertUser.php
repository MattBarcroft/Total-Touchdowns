<?php
include("../includes/init.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$address = $_POST["address"];
$password = $_POST["password"];

$user = new user($firstname, $lastname, $address, $email, $password);

$userFactory = new userFactory();
$userFactory->insertUser($user);

header("Location: ../webpages/index.php")

?>
