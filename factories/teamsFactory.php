<?php
class teamsFactory{

  function insertTeam($team){

    $pdo = get_db();

    $r = $pdo->prepare("
        INSERT INTO TotalTouchdownsDB.Teams (name)
        VALUES (:teamname)");

    $r->execute([':teamname' => $team->get_teamname()]);
  }

  function updateTeam($team){

    $pdo = get_db();

    $r = $pdo->prepare("
        DELETE FROM TotalTouchdownsDB.Teams (name)
        VALUES (:teamname)");

    $r->execute([':teamname' => $team->get_teamname()]);
  }

  function deleteTeam($team){

    $pdo = get_db();

    $r = $pdo->prepare("
        INSERT INTO TotalTouchdownsDB.Teams (name)
        VALUES (:teamname)");

    $r->execute([':teamname' => $team->get_teamname()]);
  }

  function selectSingleTeam($team){

    $pdo = get_db();

    $r = $pdo->prepare("
        SELECT team_id, name FROM TotalTouchdownsDB.Teams
        WHERE (:teamname)");

    $r->execute([':teamname' => $team->get_teamname()]);

    foreach ($r as $row){
        echo "Game " . $row["game_id"] . " is " . $row["team1name"]." Vs ". $row["team2name"]."<br>";
    }

  }

  function selectAllTeams(){
    $pdo = get_db();

    $r = $pdo->prepare("
        SELECT team_id, name FROM TotalTouchdownsDB.Teams");

    $r->execute();
    return $r;
    foreach ($r as $row){
        echo "Game " . $row["team_id"] . " is " . $row["team1name"]." Vs ". $row["team2name"]."<br>";
    }

  }

}


 ?>
