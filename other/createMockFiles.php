<?php
include("objects/games.php");
include("objects/teams.php");
include('objects/bet.php');

$teams = [];
for ($j=0; $j < 10; $j++) {
  $team = new teams();
  $team->set_teamid($j);
  $team->set_teamname("Team " . $j);
  array_push($teams, $team);
}

$games = [];
$k = 9;
for ($i=0; $i < 5; $i++) {

  $game = new games();
  $game->set_gameid($i);
  $game->set_hometeamid($i);
  $game->set_awayteamid($k);
  $k--;
  array_push($games, $game);
}

$bets = [];

for ($i=0; $i < 10; $i++) {
  $bet = new bet();
  $bet->set_betid($i);
  $bet->set_userid($i);

  $gameArr = [];
  $k = 9;
  for ($j=0; $j < 5; $j++) {

    $g = new games();
    $g->set_gameid($j);
    $g->set_hometeamid($j);
    $g->set_awayteamid($k);
    $g->set_hometeamscore(rand(0, 5));
    $g->set_awayteamscore(rand(0, 6));
    array_push($gameArr, $g);
    $k--;
  }
  $bet->set_selection($gameArr);

  array_push($bets, $bet);
}

writeToFile("teams.txt", json_encode($teams));
writeToFile("games.txt", json_encode($games));
writeToFile("bets.txt", json_encode($bets));

function writeToFile($filename, $stringToWrite){
  $fp = fopen($filename, "a+") or die ("unable to open file");

  if ($fp != false) {
    fwrite($fp, $stringToWrite);
  }
  else {
    echo "error reading file";
  }
}




 ?>
