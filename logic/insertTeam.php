<?php
include("../objects/teams.php");
include("../factories/teamsFactory.php");

$host ='127.0.0.1';
$db = 'TotalTouchdownsDB';
$userdb = 'user1';
$pass = 'mypass';

$dsn = "mysql:host=$host; dbname=$db";
$pdo = new PDO($dsn, $userdb, $pass);

$name = $_POST["teamname"];

$team = new teams($name);

$teamsFactory = new teamsFactory();

echo $team->get_teamname();
$teamsFactory->insertTeam($team);

header("../webpages/index.php")

?>
