<?php
include('../objects/bet.php');

$bets = [];

for ($i=0; $i < 10; $i++) {
  $bet = new bet();
  $bet->set_betid($i);
  $bet->set_userid($i);
  for ($j=0; $j < 5; $j++) {

  }
  $bet->set_gameid(1);
  $bet->set_hometeamscore(rand(0, 5));
  $bet->set_awayteamscore(rand(0, 5));
  array_push($bets, $bet);
}

var_dump($bets);

$jsonbets = json_encode($bets);

echo $bets[0]->get_hometeamscore(), PHP_EOL;

$filename = "../bets.txt";
$fp = fopen($filename, "a+") or die ("unable to open file");

if ($fp != false) {
  fwrite($fp, $jsonbets);
}
else {
  echo "error reading file";
}


 ?>
