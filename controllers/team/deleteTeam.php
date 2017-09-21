<?php
include("../../includes/init.php");

$teamid = $_POST["team_id"];

$teamsFactory = new teamsFactory();

$teamsFactory->delete_team($teamid);

header("Location: ../../teams/index.php");

?>
