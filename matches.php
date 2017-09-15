<?php
include("../objects/games.php");

$games = [];

for ($i=0; $i < 5; $i++) {
  $game = new games();
  $game->set_hometeamid();
}

 ?>
