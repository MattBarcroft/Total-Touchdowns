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
echo "<table>";
echo "<tr><td>Bet Placed: " . $bets[0]->bet_created . "</td></tr>";
echo "<form action=\"../controllers/bet/editBet.php\" method=\"post\">";
echo "<input type=\"hidden\" name=\"betid\" value=". $bets[0]->bet_id . ">";
echo "<input type=\"hidden\" name=\"weekid\" value=". $bets[0]->select_id . ">";
  for ($i=0; $i < count($bets); $i++) {
        echo "<tr>";
        echo "<td>" . $bets[$i]->home_team_name . "<input type=\"text\" name=" . $bets[$i]->home_team_id . "  value=" . $bets[$i]->home_team_score . "></td>";
        echo "<td>" . $bets[$i]->away_team_name . "<input type=\"text\" name=" . $bets[$i]->away_team_id . "  value=" . $bets[$i]->away_team_score . "></td>";
        echo "</tr>";
  }
 ?>
 <tr>
   <td><input type="submit" name="" value="Submit"></td>
 </tr>
 </form>
 </table>
 </div>
</body>
</html>
