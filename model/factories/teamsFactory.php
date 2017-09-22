<?php
class teamsFactory
{
    public function insert_team($team)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        INSERT INTO TotalTouchdownsDB.Teams (name)
        VALUES (:teamname)");

        $r->execute(array(':teamname' => $team->get_teamname()));
    }

    public function update_team($team)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
          UPDATE TotalTouchdownsDB.Teams
          SET name = :name
          WHERE team_id = :team_id");

        $r->execute(array(':team_id' => $team->get_teamid(),':name' => $team->get_teamname()));
    }

    public function delete_team($teamid)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        DELETE FROM TotalTouchdownsDB.Teams
        WHERE (team_id = :teamid)");

        $r->execute([':teamid' => $teamid]);
    }

    public function select_single_team($team_id)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        SELECT team_id, name FROM TotalTouchdownsDB.Teams
        WHERE team_id = :teamid");

        $r->execute([':teamid' => $team_id]);

        return $r;
    }

    public function select_all_teams()
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        SELECT team_id, name FROM TotalTouchdownsDB.Teams");

        $r->execute();
        return $r;
    }
}
