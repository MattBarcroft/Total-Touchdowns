<?php
class gamesFactory
{
    public function insert_new_game($game)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        INSERT INTO TotalTouchdownsDB.Games
        (hometeam_id, awayteam_id, kickoff_datetime, location, week_id)
        VALUES (:hometeam_id, :awayteam_id, :kickoff_datetime, :location, :week_id)");

        $r->execute(array(
            ':hometeam_id' => $game->get_hometeamid(),
            ':awayteam_id' => $game->get_awayteamid(),
            ':kickoff_datetime' => $game->get_kickoffdate(),
            ':week_id' => $game->get_weekid(),
            ':location' => $game->get_location()));
    }

    public function update_game_details($game)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
          UPDATE TotalTouchdownsDB.Games
          SET (hometeam_id = :hometeam_id, awayteam_id = :awayteam_id, kickoff_datetime = :kickoff_datetime,
          location = :location, week_id = :weekid)
          WHERE game_id = :game_id");

        $r->execute(array(
        ':hometeam_id' => $game->get_hometeamid(),
        ':awayteam_id' => $game->get_awayteamid(),
        ':kickoff_datetime' => $game->get_kickoffdate(),
        ':location' => $game->get_location(),
        ':game_id' => $game->get_gameid(),
        ':week_id' => $game->get_weekid()
      ));
    }

    public function update_game_scores($game)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
          UPDATE TotalTouchdownsDB.Games
          SET (hometeamactualscore = :hometeamactualscore, awayteamactualscore = :awayteamactualscore)
          WHERE game_id = :game_id");

        $r->execute(array(':hometeamactualscore' => $game->get_hometeamactualscore(),
        ':awayteamactualscore' => $game->get_awayteamactualscore()
      ));
    }

    public function delete_game($game_id)
    {
        //DELETE FLAG
    }

    public function select_single_game($game_id)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
          SELECT gm.hometeam_id, htm.name, gm.awayteam_id, atm.name, gm.hometeamactualscore, gm.awayteamactualscore,
          gm.kickoff_datetime, gm.week_id, gm.location
          FROM TotalTouchdownsDB.Games gm
          LEFT JOIN TotalTouchdownsDB.Teams htm
          ON gm.hometeam_id = htm.team_id
          LEFT JOIN TotalTouchdownsDB.Teams atm
          ON gm.awayteam_id = atm.team_id
          WHERE  gm.game_id = :game_id");

        $r->execute(array(':game_id' => $game_id));
        return $r;
    }

    public function select_games_by_week($week_id)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
          SELECT gm.game_id, gm.hometeam_id, htm.name as htname, gm.awayteam_id, atm.name as atname, gm.hometeamactualscore, gm.awayteamactualscore,
          gm.kickoff_datetime, gm.week_id, gm.location
          FROM TotalTouchdownsDB.Games gm
          LEFT JOIN TotalTouchdownsDB.Teams htm
          ON gm.hometeam_id = htm.team_id
          LEFT JOIN TotalTouchdownsDB.Teams atm
          ON gm.awayteam_id = atm.team_id
          WHERE  gm.week_id = :week_id");

        $r->execute(array(':week_id' => $week_id));
        return $r;
    }

    public function select_all_games()
    {
        $pdo = get_db();

        $r = $pdo->prepare("
          SELECT gm.game_id, gm.hometeam_id, htm.name as htname, gm.awayteam_id, atm.name as atname, gm.hometeamactualscore, gm.awayteamactualscore,
          gm.kickoff_datetime, gm.week_id, gm.location
          FROM TotalTouchdownsDB.Games gm
          LEFT JOIN TotalTouchdownsDB.Teams htm
          ON gm.hometeam_id = htm.team_id
          LEFT JOIN TotalTouchdownsDB.Teams atm
          ON gm.awayteam_id = atm.team_id");

        $r->execute();
        return $r;
    }
}
