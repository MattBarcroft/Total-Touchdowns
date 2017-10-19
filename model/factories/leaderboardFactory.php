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
        SET @row_number:=0;

        SELECT @row_number:=@row_number+1 AS position, scores.firstname, scores.lastname, scores.totalpoints
          FROM
        (SELECT  usr.firstname, usr.lastname, SUM(sel.pointsawarded) as totalpoints FROM TotalTouchdownsDB.Selections sel
                   JOIN TotalTouchdownsDB.Bets bet
                   ON bet.bet_id = sel.bet_id
                   JOIN TotalTouchdownsDB.Users usr
                   ON bet.user_id = usr.user_id
                   GROUP BY usr.firstname, usr.lastname
                   ORDER BY SUM(sel.pointsawarded) DESC) as scores
           ");

        $r->execute();
      
        return $r;
    }
    public function get_points_by_user()
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
        WHERE usr.user_id = 1
        GROUP BY usr.firstname, usr.lastname
        ORDER BY SUM(sel.pointsawarded) DESC
           ");

        $r->execute();
      
        return $r;
    }

}
