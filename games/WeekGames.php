<?php


$week = $_GET["week"];

$r = $pdo->prepare("
        SELECT game.game_id, game.hometeam_id, team1.name as team1name, game.awayteam_id, team2.name as team2name,
        game.kickoff_datetime, game.location, game.week_id
        FROM Games game
        LEFT JOIN Teams team1
        ON team1.team_id = game.hometeam_id
        LEFT JOIN Teams team2
        ON team2.team_id = game.awayteam_id
        WHERE game.week_id = :week");
$r->execute(['week' => $week]);

foreach ($r as $row){
    echo "Game " . $row["game_id"] . " is " . $row["team1name"]." Vs ". $row["team2name"]."<br>";
}


 ?>
