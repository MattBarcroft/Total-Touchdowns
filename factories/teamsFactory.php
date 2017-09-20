<?php
class teamsFactory{

  function insert_team($team){

    $pdo = get_db();

    $r = $pdo->prepare("
        INSERT INTO TotalTouchdownsDB.Teams (name)
        VALUES (:teamname)");

    $r->execute([':teamname' => $team->get_teamname()]);
  }

  function update_team($team){

    $pdo = get_db();

    $r = $pdo->prepare("
        DELETE FROM TotalTouchdownsDB.Teams (name)
        VALUES (:teamname)");

    $r->execute([':teamname' => $team->get_teamname()]);
  }

  function delete_team($team){

    $pdo = get_db();

    $r = $pdo->prepare("
        INSERT INTO TotalTouchdownsDB.Teams (name)
        VALUES (:teamname)");

    $r->execute([':teamname' => $team->get_teamname()]);
  }

  function select_single_team($team_id){

    $pdo = get_db();

    $r = $pdo->prepare("
        SELECT team_id, name FROM TotalTouchdownsDB.Teams
        WHERE team_id = :teamid");

    $r->execute([':teamid' => $team_id]);

    return $r;

  }

  function select_all_teams(){
    $pdo = get_db();

    $r = $pdo->prepare("
        SELECT team_id, name FROM TotalTouchdownsDB.Teams");

    $r->execute();
    return $r;

  }

}


 ?>
