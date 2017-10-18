<?php
include("../includes/head.php");
include("../includes/navbar.php");

  $betFactory = new betsFactory();
  $userFactory = new userFactory();
  $bets = $betFactory->select_all_bet_selections_by_user($userFactory->getcurrentuserid());
  $betid = $bets[0]->bet_id;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <div class="container">


<?php
//var_dump($bets);

echo "<table>";
echo "<tr><td>Bet Placed: " . $bets[0]->bet_created . "</td></tr>";
  foreach ($bets as $bet) {

      echo "<tr>";

      if ($betid == $bet->bet_id) {
        echo "<td>" . $bet->home_team_name . "<input type=\"text\" name=\"\" value=\"$bet->home_team_score\">" . "</td>";
        echo "<td>" . $bet->away_team_name . "<input type=\"text\" name=\"\" value=\"$bet->away_team_score\">" . "</td>";
      }
      else {
        $betid = $bet->bet_id;
        echo "</table>";
        echo "<br>";
        echo "<table>";
        echo "<tr>";

        echo "<tr><td>Bet Placed: $bet->bet_created</td></tr>";
        echo "<td>" . $bet->home_team_name . "<input type=\"text\" name=\"\" value=\"$bet->home_team_score\">" . "</td>";
        echo "<td>" . $bet->away_team_name . "<input type=\"text\" name=\"\" value=\"$bet->away_team_score\">" . "</td>";

    }

    echo "</tr>";
    echo "</form>";
    echo "</div>";


  }
  echo "</table>";
 ?>
 </div>
</body>
</html>
