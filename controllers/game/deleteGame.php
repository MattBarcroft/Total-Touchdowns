<?php
include("../../includes/init.php");

$gameid = $_POST["game_id"];

$gamesFactory = new gamesFactory();

$gamesFactory->delete_game($gameid);

header("Location: ../../games/adminIndex.php");


?>
