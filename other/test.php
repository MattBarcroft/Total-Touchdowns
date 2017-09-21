<?php
include("fileHandler.php");
include("updateBet.php");

function main(){
  $fh = new fileHandler();
  $ub = new updateBet();

  $contents = $fh->readFromFile("games.txt");
  $gamesArr = json_decode($contents);

  $teamJson = $fh->readFromFile("teams.txt");
  $teamArr = json_decode($teamJson);
  //var_dump($teamArr);

  $game = [];

  foreach ($gamesArr as $value) {
    $hid = $value->hometeamid;
    $aid = $value->awayteamid;

    echo getTeamNameById($hid, $teamArr) . " VS " . getTeamNameById($aid, $teamArr) . PHP_EOL;

    $homescoreinput = readline("Please enter home score: ");
    $awayscoreinput = readline("Please enter away score: ");
    $homescore = (int)$homescoreinput;
    $awayscore = (int)$awayscoreinput;

    array_push($game,$ub->createSingleSelection($value->gameid, $hid, $homescore, $aid, $awayscore));
  }
  //var_dump($game);
$ub->createBet($game);
}

function getTeamNameById($id, $teamArr) {
  foreach ($teamArr as $value) {
    if($value->teamid == $id){
      return $value->teamname;
    }
  }
  return "Team not found";
}
main();

?>
