<?php
include("../../includes/init.php");

$teamid = $_POST["team_id"];
$name = $_POST["teamname"];

$team = new teams($name);
$team->set_teamid($teamid);
$team->set_teamname($name);

$team->get_teamid();
$teamsFactory = new teamsFactory();

$teamsFactory->update_team($team);

header("Location: ../../teams/index.php");

?>
