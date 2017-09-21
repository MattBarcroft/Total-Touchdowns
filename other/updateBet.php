<?php
//update bets
//include("fileHandler.php");
include("objects/bet.php");
include("objects/games.php");

 class updateBet{
//
// public $fh;
//
// function __construct($fh){
//   $this->fh = $fh;
// }
//
function getNextBetId(){
$fh1 = new fileHandler();
  $contents = $fh1->readFromFile("bets.txt");

  $decode = json_decode($contents);

  $maxid = -1;
  if (!is_null($decode)) {
    # code...

  foreach ($decode as $key => $value) {

    if ($value->betid > $maxid) {
      $maxid = $value->betid;
      //echo $value->selection[0]->hometeamscore, PHP_EOL;
    }
  }
  return $maxid;
}
else return 0;

}

function createBet($selection){
  $fh1 = new fileHandler();
  $bet = new Bet();

  $bet->set_betid($this->getNextBetId());
  //todo make the datetime method show a usable date time
  $bet->set_betplaced(time('d/m/y hh:mm:ss'));
  $bet->set_selection($selection);

  $contents = json_decode($fh1->readFromFile("bets.txt"));
  //todo check if contents is getting set to an empty array or is null
  if (!is_null($contents)) {
    $contents = [];
  }
  else  array_push($contents, $bet);

  $fh1->writeToFile("bets.txt",json_encode($bet));
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
}
 ?>
