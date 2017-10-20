<?php
class betsFactory
{
    public function insert_new_bet($user_id, $first_quarter_td)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        INSERT INTO TotalTouchdownsDB.Bets (user_id, first_quarter_td) VALUES (:user_id, :first_quarter_td)");

        $r->execute(array(
          ':user_id' => $user_id, ':first_quarter_td' => $first_quarter_td));

        $r = $pdo->lastInsertId();
        return $r;
    }


    public function update_bet($bet)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
      UPDATE `TotalTouchdownsDB`.`Bets` (`bet_id`) VALUES (':user_id')");

        $r->execute(array(
        ':bet_id' => $bet->get_betid()));
    }


    public function delete_bet($bet_id)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
      DELETE FROM `TotalTouchdownsDB`.`Bets` WHERE bet_id = ':bet_id'");

        $r->execute(array(':bet_id' => $bet_id));
    }

    public function select_single_bet($bet_id)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        SELECT bet_id, user_id, betcreated, betmodified
        FROM TotalTouchdownsDB.Bets
        WHERE bet_id = :bet_id");

        $r->execute(array(':bet_id' => $bet_id));
        return $r;
    }

    public function select_bet_by_user($user_id)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
      SELECT bet_id, user_id, betcreated, betmodified
      FROM TotalTouchdownsDB.Bets
      WHERE user_id = :user_id");

        $r->execute(array(':user_id' => $user_id));
        return $r;
    }
    public function select_last_bet_placed($user_id)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        SELECT  gam.week_id
        FROM TotalTouchdownsDB.Bets bet
        JOIN TotalTouchdownsDB.Selections sel
        ON bet.bet_id = sel.bet_id
        JOIN TotalTouchdownsDB.Games gam
        ON gam.game_id = sel.game_id
        WHERE bet.user_id = :user_id
        GROUP BY gam.week_id
        ORDER BY  gam.week_id DESC");

        $r->execute(array(':user_id' => $user_id));
        return $r;
    }
    public function select_single_bet_selections_by_user_week_game($user_id, $week_id, $game_id)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
            SELECT t1.bet_id, t1.betcreated,
            t4.name, t5.name, t2.hometeamscore, t2.awayteamscore
            FROM TotalTouchdownsDB.Bets t1
            LEFT JOIN TotalTouchdownsDB.Selections t2 ON t1.bet_id = t2.bet_id
            LEFT JOIN TotalTouchdownsDB.Games t3 ON t2.game_id = t3.game_id
            LEFT JOIN TotalTouchdownsDB.Teams t4 ON t3.hometeam_id = t4.team_id
            LEFT JOIN TotalTouchdownsDB.Teams t5 ON t3.awayteam_id = t5.team_id
            WHERE t1.user_id = :user_id AND t3.week_id = :week_id
            AND t3.game_id = :game_id
            ORDER BY t3.game_id ASC
        ");

        $r->execute(array(':user_id' => $user_id, ':week_id' => $week_id, ':game_id' => $game_id ));
        $bets = $r->FetchAll(PDO::FETCH_NUM);

        $kvp = [];

        foreach ($bets as $bet) {
            $bs = new betSelections($bet[0], $bet[1], $bet[2], $bet[3], $bet[4], $bet[5]);

            array_push($kvp, $bs);
        }

        return $kvp;
    }

    public function getWeekId()
    {
      $pdo = get_db();
      //$currDateTime = date('Y/m/d h:m:s');
      $currDateTime = new datetime('2017-09-13');
      $r = $pdo->prepare("
        SELECT week_id FROM TotalTouchdownsDB.Games
        where kickoff_datetime > '2017-09-13 12:09:00'
        order by kickoff_datetime asc
        limit 1
      ");
      //$thing = date_format($currDateTime, 'Y-m-d h:m:s');

      //$r->execute(array(':dt' => $thing));
      //$week = $r->fetchAll();
      //var_dump($week);
      $r->execute();
      $week = $r->fetch()[0];
      //echo $week;
      return $week;
    }

    public function select_all_bet_selections_by_user($uid)
    {
      $gf = new gamesFactory();
      $weekid = $gf->most_recent_game_completed()->fetch()[0]+1;
      $pdo = get_db();

      $r = $pdo->prepare("
        SELECT t1.bet_id, t1.betcreated, t4.name, t5.name, t2.hometeamscore, t2.awayteamscore, t4.team_id, t5.team_id, t3.week_id
        FROM TotalTouchdownsDB.Bets t1
        LEFT JOIN TotalTouchdownsDB.Selections t2 ON t1.bet_id = t2.bet_id
        LEFT JOIN TotalTouchdownsDB.Games t3 ON t2.game_id = t3.game_id
        LEFT JOIN TotalTouchdownsDB.Teams t4 ON t3.hometeam_id = t4.team_id
        LEFT JOIN TotalTouchdownsDB.Teams t5 ON t3.awayteam_id = t5.team_id
        WHERE t1.user_id = :uid and t3.week_id = :weekid");

        $r->execute(array(':uid' => $uid, ':weekid' => $weekid));
        $bets = $r->FetchAll(PDO::FETCH_NUM);

        $kvp = [];

        foreach ($bets as $bet) {

            $bs = new betSelections();
            $bs->construct($bet[0], $bet[1], $bet[2], $bet[3], $bet[4], $bet[5], $bet[6], $bet[7], $bet[8]);

            array_push($kvp, $bs);
        }

        return $kvp;
    }

    public function update_bet_blah($betobjarr)
    {
      $pdo = get_db();
      foreach ($betobjarr as $betSelection) {

        $r = $pdo->prepare("
        UPDATE TotalTouchdownsDB.Selections
        SET TotalTouchdownsDB.Selections.hometeamscore = :hometeamscore, TotalTouchdownsDB.Selections.awayteamscore = :awayteamscore
        WHERE TotalTouchdownsDB.Selections.bet_id = :betid and TotalTouchdownsDB.Selections.game_id =
        (select TotalTouchdownsDB.Games.game_id
        from TotalTouchdownsDB.Games
        where TotalTouchdownsDB.Games.hometeam_id = :htid and TotalTouchdownsDB.Games.awayteam_id = :atid and TotalTouchdownsDB.Games.week_id = :weekid
        limit 1)");

        $r->execute(array(
          ':hometeamscore' => $betSelection->home_team_score,
          ':awayteamscore' => $betSelection->away_team_score,
          ':betid' => $betSelection->bet_id,
          ':htid' => $betSelection->home_team_id,
          ':atid' => $betSelection->away_team_id,
          ':weekid' => $betSelection->select_id
        ));
      }
    }

    public function select_all_bets()
    {
        $pdo = get_db();

        $r = $pdo->prepare("
    SELECT bet_id, user_id, betcreated, betmodified
    FROM TotalTouchdownsDB.Bets");

        $r->execute();
        return $r;
    }

    public function insert_selections($bet_id, $selections)
    {
        $pdo = get_db();

        $str_query = "insert into TotalTouchdownsDB.Selections (bet_id, game_id, hometeamscore, awayteamscore)
      Values";

        $startinggameid = reset($selections);

        for ($i=$startinggameid; $i < ($startinggameid+(count($_POST)/3)); $i++) {
            $stmt = $pdo->prepare("insert into TotalTouchdownsDB.Selections
            (bet_id, game_id, hometeamscore, awayteamscore)
            Values (:betid, :gameid, :htscore, :atscore)");

            $stmt->execute(array(':betid' => $bet_id, ':gameid' => $selections["gameid-$i"],
          ':htscore' => $selections["htscore-game-$i"], ':atscore' => $selections["atscore-game-$i"]));

        }

    }
}
