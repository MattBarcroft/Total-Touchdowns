<?php
include("../includes/head.php");
?>


  <?php
  include("../includes/navbar.php");
  ?>
  <div class=container>
    <?php
      $settlingbetsFactory = new settlingbetsFactory();
      $rows = $settlingbetsFactory->get_unsettled_bets();
      ?>
      <h3>Bets Updated</h3>
      <table class="table">
      <tr>
        <th>Bet Id</th>
        <th>Selection Id</th>
        <th>Game Id</th>
        <th>Points Awarded</th>
      </tr>
        <?php
    foreach ($rows as $row) {
        $selections = new selections();

        $selections->set_selectionid($row['selection_id']);
        $selections->set_betid($row['bet_id']);
        $selections->set_gameid($row['game_id']);
        $selections->set_hometeamactualscore($row['hometeamscore']);
        $selections->set_awayteamactualscore($row['awayteamscore']);

        $gamesFactory = new gamesFactory();
        $single_game = $gamesFactory->select_single_game($selections->get_gameid());

        $r = $single_game->fetchAll();

        $game = new games($r[0]['hometeam_id'], $r[0]['awayteam_id'], $r[0]['kickoff_datetime'], $r[0]['week_id'], $r[0]['location']);
        $game->set_gameid($r[0]['game_id']);
        $game->set_hometeamactualscore($r[0]['hometeamactualscore']);
        $game->set_awayteamactualscore($r[0]['awayteamactualscore']);

        $selections->set_pointsawarded($settlingbetsFactory->calculate_points_awarded($game, $selections));

        $settlingbetsFactory->update_bet_with_points($selections);


        echo "<tr><td>".$selections->get_betid()."</td>";
        echo "<td>".$selections->get_selectionid()."</td>";
        echo "<td>".$game->get_gameid()."</td>";
        echo "<td>".$selections->get_pointsawarded()."</td>";
        echo "<tr>";
    };
          ?>
        </table>
  </div>
  </body>
  </html>
