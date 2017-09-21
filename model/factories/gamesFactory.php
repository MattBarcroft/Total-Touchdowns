<?php
class gamesfactory{
  include("../includes/init.php");

  function insert_new_game($game){
    $pdo = get_db();

    $r = $pdo->prepare("
        INSERT INTO TotalTouchdownsDB.Games
        (hometeam_id, awayteam_id, kickoff_datetime, location)
        VALUES (:hometeam_id, awayteam_id, kickoff_datetime, location)");

    $r->execute(array(':hometeam_id' => $team->get_hometeamid(),':awayteam_id' => $team->get_awayteamid(),
          ,':kickoff_datetime' => $team->get_kickoff_datetime(), ':location' => $team->get_location()));
  }

  function update_game_details($game){

  }

  function update_game_scores($game){

  }

  function delete_game($game_id){

  }

  function select_single_game($game){

  }

  function select_games_by_week($week_id){

  }

  function select_all_games(){

  }



}
 ?>
