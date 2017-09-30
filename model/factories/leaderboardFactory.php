<?php
class leaderboardFactory
{
    public function get_top_10_leaderboard()
    {
        $pdo = get_db();

        $r = $pdo->prepare("
    SELECT usr.firstname, usr.lastname, SUM(sel.pointsawarded) as totalpoints FROM TotalTouchdownsDB.Selections sel
    JOIN TotalTouchdownsDB.Bets bet
    ON bet.bet_id = sel.bet_id
    JOIN TotalTouchdownsDB.Users usr
    ON bet.user_id = usr.user_id
    GROUP BY usr.firstname, usr.lastname
    ORDER BY SUM(sel.pointsawarded) DESC
");

        $r->execute();
        return $r;
    }
}
