<?php

include("../../includes/init.php");

$game_id = $_POST["game_id"];
$hometeamactualscore = $_POST["hometeamactualscore"];
$awayteamactualscore = $_POST["awayteamactualscore"];
$firstquartertd = $_POST["firstquartertd"];


$gamesFactory = new gamesFactory();

echo $hometeamactualscore."<br>";
echo $awayteamactualscore."<br>";
echo $game_id;

$gamesFactory->update_game_scores($game_id, $hometeamactualscore, $awayteamactualscore, $firstquartertd);

header("Location: /games/adminindex.php");

?>




<!-- // include("../../includes/init.php");

// $hometeamid = $_POST["hometeam_id"];
// $awayteamid = $_POST["awayteam_id"];
// $kickoff_datetime = $_POST["kickoff_datetime"];
// $week_id = $_POST["week_id"];
// $location = $_POST["location"];

// $kickoff_datetime = $kickoff_datetime." 00:00:00";

// $game = new games(
//     $hometeamid,
//     $awayteamid,
//     $kickoff_datetime,
//     $week_id,
//     $location
// );

// $gameFactory = new gamesFactory();
// $gameFactory->insert_new_game($game);

// header("Location: /games/index.php"); -->
