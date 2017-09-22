<?php
include("../../includes/init.php");


var_dump($_POST);
echo "<br><br>";

$db = get_db();

//$pdo = $db->execute()
//insert row into bet, get user id by session
for ($i=1; $i <= count($_POST); $i++) {
  echo "gameid = $i";
  echo $_POST["htscore-game-$i"];
  echo $_POST["atscore-game-$i"];
}

//header("Location: /games/index.php");
