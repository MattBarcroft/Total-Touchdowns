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
      <table class="table">
        <?php
    foreach ($rows as $row) {
        $bet = new bet();

        $bet->set_selection($row['selection_id']);
        $bet->set_betid($row['bet_id']);
        $bet->set_gameid($row['game_id']);
        $bet->set_hometeamactualscore($row['hometeamscore']);
        $bet->set_awayteamactualscore($row['awayteamscore']);

        $gamesFactory = new gamesFactory();
        $single_game = $gamesFactory->select_single_game($bet->get_gameid());

        $r = $single_game->fetchAll();

        var_dump($r);
        // $game = new game();
        // $game->set_gameid($r[0]['game_id']);
        // $game->set_hometeamactualscore($r[0]['hometeamactualscore']);
        // $game->set_awayteamactualscore($r[0]['awayteamactualscore']);
        // $game->set_week_id($r[0]['week_id']);









        switch ($favcolor) {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }

        echo "<tr><td>".$row['bet_id']."</td>";
        echo "<td>".$row['game_id']."</td>";
        echo "<td>".$row['hometeamscore']."</td>";
        echo "<td>".$row['awayteamscore']."</td>";
        echo "<td>".$row['hometeamactualscore']."</td>";
        echo "<td>".$row['awayteamactualscore']."</td>";
        echo "<td>".$row['pointsawarded']."</td>";
        echo "<tr>";
    };
          ?>
        </table>
  </div>
  </body>
  </html>
