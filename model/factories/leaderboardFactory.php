<?php
class leaderboardFactory
{
    public function get_top_10_leaderboard()
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        SELECT usr.firstname, usr.lastname, 
        SUM(sel.pointsawarded) as totalpoints 
        FROM TotalTouchdownsDB.Selections sel
        JOIN TotalTouchdownsDB.Bets bet
        ON bet.bet_id = sel.bet_id
        JOIN TotalTouchdownsDB.Users usr 
        ON bet.user_id = usr.user_id
        GROUP BY usr.firstname, usr.lastname
        ORDER BY SUM(sel.pointsawarded) DESC
        LIMIT 10
");

        $r->execute();
        return $r;
    }
    public function get_all_leaderboard()
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        SELECT  usr.firstname, usr.lastname, SUM(sel.pointsawarded) as 
        totalpoints FROM TotalTouchdownsDB.Selections sel
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
    public function get_points_by_user($userid)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        SELECT usr.firstname, usr.lastname, 
        SUM(sel.pointsawarded) as totalpoints 
        FROM TotalTouchdownsDB.Selections sel
        JOIN TotalTouchdownsDB.Bets bet
        ON bet.bet_id = sel.bet_id
        JOIN TotalTouchdownsDB.Users usr 
        ON bet.user_id = usr.user_id
        WHERE usr.user_id = :user_id
        GROUP BY usr.firstname, usr.lastname
        ORDER BY SUM(sel.pointsawarded) DESC
           ");

        $r->execute(array(':user_id' => $userid));
      
        return $r;
    }
    public function get_points_by_user_week($userid, $week_id)
    {
        $pdo = get_db();

        $r = $pdo->prepare("
        SELECT usr.firstname, usr.lastname, 
        SUM(sel.pointsawarded) as totalpoints 
        FROM TotalTouchdownsDB.Selections sel
        JOIN TotalTouchdownsDB.Bets bet
        ON bet.bet_id = sel.bet_id
        JOIN TotalTouchdownsDB.Users usr 
        ON bet.user_id = usr.user_id
        JOIN TotalTouchdownsDB.Games gam
        ON sel.game_id = gam.game_id
        WHERE usr.user_id = :user_id
        AND gam.week_id = :week_id
        GROUP BY usr.firstname, usr.lastname
        ORDER BY SUM(sel.pointsawarded) DESC
           ");

        $r->execute(array(':user_id' => $userid, ':week_id' => $week_id));
      
        return $r;
    }

}
