<?php
include("../includes/init.php");

$name = $_POST["teamname"];

$team = new teams($name);

$teamsFactory = new teamsFactory();

$teamsFactory->insert_team($team);

header("Location: ../webpages/index.php");

?>
