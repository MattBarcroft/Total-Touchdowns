<?php
include("../objects/user.php");
include("../factories/userFactory.php");

$host ='127.0.0.1';
$db = 'TotalTouchdownsDB';
$userdb = 'user1';
$pass = 'mypass';

$dsn = "mysql:host=$host; dbname=$db";
$pdo = new PDO($dsn, $userdb, $pass);

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$address = $_POST["address"];
$password = $_POST["password"];

$user = new user($firstname, $lastname, $email, $address, $password);

$userFactory = new userFactory();
$userFactory->insertUser($user);

header("../webpages/index.php")

?>
