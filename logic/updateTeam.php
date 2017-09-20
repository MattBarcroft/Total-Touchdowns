<?php
include("../includes/init.php");

$teamid = $_POST["team_id"];
$name = $_POST["teamname"];

$team = new teams($name);
$team->set_teamid($teamid);

$teamsFactory = new teamsFactory();

$teamsFactory->update_team($team);

header("Location: ../webpages/index.php");

?>
