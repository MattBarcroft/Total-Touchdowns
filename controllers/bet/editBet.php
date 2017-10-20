<?php
  include("../../includes/init.php");

  $bf = new betsFactory();

  $gameArr = [];
  $count = 0;

  $betSelections = new betSelections();
  $betSelections->bet_id = $_POST['betid'];
  $betSelections->select_id = $_POST['weekid'];

  //todo need to get the string to return a proper datetime according to the db, do here and below
  //$betSelections->betcreated = getdate('Y-m-d h:m:s');
  foreach ($_POST as $key => $value) {

    if ($key != "betid" && $key != "weekid") {

      if ($count == 0){
        $betSelections->home_team_id = $key;
        $betSelections->home_team_score = $value;
        $count++;
      }
      else if ($count == 1){
        $betSelections->away_team_id = $key;
        $betSelections->away_team_score = $value;
        $count = 0;
        array_push($gameArr, $betSelections);
        $betSelections = new betSelections();
        $betSelections->bet_id = $_POST['betid'];
        $betSelections->select_id = $_POST['weekid'];
        //$betSelections->betcreated = getdate(Y-m-d h:m:s);
      }
    }
  }
  $bf->update_bet_blah($gameArr);
  header('Location: ../../users/viewBets.php');
 ?>
