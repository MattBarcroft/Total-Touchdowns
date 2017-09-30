<?php
class betsFactory
{
    public function insert_new_bet($user_id)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        INSERT INTO TotalTouchdownsDB.Bets (user_id) VALUES (:user_id)");

        $r->execute(array(
          ':user_id' => $user_id));

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
