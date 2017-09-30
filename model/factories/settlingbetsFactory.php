<?php
class settlingbetsFactory
{
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
}
