<?php
include("fileHandler.php");

function main(){

  $fh = new fileHandler();
  $contents = $fh->readFromFile("games.txt");
  $gamesArr = json_decode($contents);

  $teamJson = $fh->readFromFile("teams.txt");
  $teamArr = json_decode($teamJson);
  //var_dump($teamArr);

foreach ($gamesArr as $value) {
  $hid = $value->hometeamid;
echo getTeamNameById($hid, $teamArr) . PHP_EOL;
}
  //$input = readline( "Please insert your home team guess: ");
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
