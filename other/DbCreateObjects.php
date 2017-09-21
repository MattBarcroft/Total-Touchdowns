<?php
include("objects/teams.php");

$host = '127.0.0.1';
$db = 'TotalTouchdownsDB';
$user = 'user1';
$pass = 'mypass';

$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $pass);

$r = $pdo->query("select * from TotalTouchdownsDB.Teams");


$teams = [];

foreach ($r as $value) {
  echo $value["team_id"];
  $team = new teams(((int)$value["team_id"]), ((string)$value["teamname"]));
  array_push($teams, $team);
}

var_dump($teams);

// $r->query("SELECT * FROM TotalTouchdownsDB.Games inner join TotalTouchdownsDB.Teams
// on TotalTouchdownsDB.Games. = TotalTouchdownsDB.Games.");
//
//
// foreach ($r as $row) {
//   //the name of the collumn
//   echo $row["hometeamscore"];
//   echo $row["awayteamscore"];
// }

// $r->query("SELECT * FROM TotalTouchdownsDB.Selections inner join TotalTouchdownsDB.Bets
// on TotalTouchdownsDB.Selections.bet_id = TotalTouchdownsDB.Bets.bet_id");
//
//
// foreach ($r as $row) {
//   //the name of the collumn
//   echo $row["hometeamscore"];
//   echo $row["awayteamscore"];
// }
//get all Bets selections to show them in cmd
//


 ?>
