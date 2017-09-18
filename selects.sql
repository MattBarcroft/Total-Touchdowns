--SELECTS TOTAL POINTS PER USER FOR A SPECIFIC WEEK
SELECT TOP 10 usr.user_id, usr.name ,SUM(sel.points_awarded) FROM Bets bet
JOIN Selection sel
ON sel.bet_id = bet.bet_id]
JOIN Users usr
ON sel.user_id = usr.user_id
JOIN Games game
ON game.game_id = sel.game_id
WHERE game.week_id <= $PARAMETER
GROUP BY usr.user_id, usr.name
ORDER BY SUM(sel.points_awarded) DESC









--SELECTS TOP 10 USERS BY TOTAL POINTS
SELECT TOP 10 usr.user_id, usr.name ,SUM(sel.points_awarded) FROM Bets bet
JOIN Selection sel
ON sel.bet_id = bet.bet_id]
JOIN Users usr
ON sel.user_id = usr.user_id
JOIN Games game
ON game.game_id = sel.game_id
GROUP BY usr.user_id, usr.name
ORDER BY SUM(sel.points_awarded) DESC
