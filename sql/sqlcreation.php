<?php
$host = '127.0.0.1';
$db = 'TotalTouchdownsDB';
$user = 'user1';
$pass = 'mypass';

$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $pass);

//query remember to add table, how not to do it
//$r = $pdo->query("select * from *tablename* where *field = something* ");

$userid = '1';

//:color is the name of a placeholder for a variable
$r = $pdo->prepare("select * from Bets where user_id = :userid");
//execute allows the preprepared statement to be ran to without addition sql
$r->execute(['userid' => $userid]);



foreach ($r as $row) {
  //the name of the collumn
	echo "HELLO";
  echo $row["user_id"] . PHP_EOL;
}

echo "GODDBYE";
 ?>
