<?php
class settlingbetsFactory
{
    private $pointsawarded;
    public function get_unsettled_bets()
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        SELECT sel.selection_id, sel.bet_id, sel.game_id, sel.hometeamscore, sel.awayteamscore, sel.pointsawarded
        FROM TotalTouchdownsDB.Selections sel
        WHERE sel.pointsawarded is NULL
        ");
        $r->execute();

        return $r;
    }
    public function calculate_points_awarded($games, $selections)
    {
        $sel_ht_score = $selections->get_hometeamactualscore();
        $sel_at_score = $selections->get_awayteamactualscore();
        $gam_ht_score = $games->get_hometeamactualscore();
        $gam_at_score = $games->get_awayteamactualscore();


        if ($sel_ht_score == $gam_ht_score && $sel_at_score == $gam_at_score) {
            $pointsawarded = 5;
        } elseif ($sel_ht_score == $gam_ht_score) {
            $pointsawarded = 2;
        } elseif ($sel_at_score == $gam_at_score) {
            $pointsawarded = 2;
        } else {
            $pointsawarded = 0;
        }
        return $pointsawarded;
    }

    public function total_points_in_bet($bet_id)
    {

        $pdo = get_db();
        
        $r = $pdo->prepare("
        SELECT (SUM(t1.PointsAwarded)) as totalA
        from TotalTouchdownsDB.Selections t1 
        left join TotalTouchdownsDB.Bets t2 ON t1.bet_id = t2.bet_id
        left join TotalTouchdownsDB.games t3 on t1.game_id = t3.game_id
        where t1.bet_id = :bet_id
        group by bet_id
        order by totalA desc;
        ");
        $r->execute(array(':bet_id' => $bet_id));

        return $r;

    }

    // public function checkWinner()
    // {
    //     $query = "select * from ";
    // }

    public function update_bet_with_points($selections)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
              UPDATE TotalTouchdownsDB.Selections
              SET pointsawarded = :pointsawarded
              WHERE selection_id = :selection_id");

        $r->execute(array(':pointsawarded' => $selections->get_pointsawarded(),':selection_id' => $selections->get_selectionid()));
    }
}
