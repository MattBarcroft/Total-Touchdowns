<?php
//update bets
include("fileHandler.php");
include("objects/bet.php");
include("objects/ganes.php");

$fh = new fileHandler();

function getNextBetId(){
  $contents = $fh->readFromFile("bets.txt");

  $decode = json_decode($contents);

  $maxid = -1;
  foreach ($decode as $key => $value) {

    if ($value->betid > $maxid) {
      $maxid = $value->betid;
      //echo $value->selection[0]->hometeamscore, PHP_EOL;
    }
  }

  return $maxid;
}

function createBet($gameid, $selection){
  $bet = new Bet();

  $bet->set_betid(getNextBetId());
  $bet->set_gameid($gameid);
  $bet->set_betplaced(time('d/m/y hh:mm:ss'));
  $bet->set_selection($selection);

}

function createSingleSelection($gameid, $hometeamid, $hometeamscore, $awayteamid, $awayteamscore) {
      $game = new games();
      $game->set_gameid($gameid);
      $game->set_hometeamid($hometeamid);
      $game->set_awayteamid($awayteamid);
      $game->set_hometeamscore($hometeamscore);
      $game->set_awayteamscore($awayteamscore);

      return $game;
}

 ?>
