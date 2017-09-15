<?php
//update bets
include("fileHandler.php");
include("objects/bet.php");

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

function createBet($gameid){
  $bet = new Bet();

  $bet->set_betid(getNextBetId());
  $bet->set_gameid($gameid);
  $bet->set

}

 ?>
