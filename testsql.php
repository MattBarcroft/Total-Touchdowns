<?php
$host = '127.0.0.1';
$db = 'TotalTouchdown';
$user = 'user1';
$pass = 'mypass';

$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $pass);

//query remember to add table, how not to do it
//$r = $pdo->query("select * from *tablename* where *field = something* ");

//:color is the name of a placeholder for a variable
$r = $pdo->prepare("select * from Bets where  = :color* ");
//execute allows the preprepared statement to be ran to without addition sql
$r->execute(['color' => $color]);

foreach ($r as $row) {
  //the name of the collumn
  echo $row[""];
}

 ?>
