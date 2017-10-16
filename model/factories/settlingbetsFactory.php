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
