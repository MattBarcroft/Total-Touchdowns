<?php
include("../includes/head.php");

include("../includes/navbar.php");
?>

  <div class="container">
  <?php
  $weekid = $_GET['week_id'];

  $games = new gamesFactory();
  if (isset($weekid)) {
      $rows = $games->select_games_by_week($weekid);
  } else {
      $rows = $games->select_all_games();
  }


  echo "<table>";
  echo "<tr><th>Game ID</th>";
  echo "<th>Weekid</th>";
  echo "<th>Hometeam</th>";
  echo "<th>Awayteam</th>";
  echo "<th>Kickoff</th>";
  echo "<th>Location</th>";
  echo "<th>Delete</th>";
  echo "<th>Update Details</th>";
  echo "<th>Update Score</th></tr>";

  foreach ($rows as $row) {
      echo "<tr><td>".$row['game_id']."</td>";
      echo "<td>".$row['week_id']."</td>";
      echo "<td>".$row['htname']."</td>";
      echo "<td>".$row['atname']."</td>";
      echo "<td>".$row['kickoff_datetime']."</td>";
      echo "<td>".$row['location']."</td>";
      echo "<td><a href=delete.php?game_id=".$row['game_id'].">"."Delete</a></td>";
      echo "<td><a href=updateDetails.php?game_id=".$row['game_id'].">"."Update Details</a></td>";
      echo "<td><a href=updateScore.php?game_id=".$row['game_id'].">"."Update Score</a></td>";
  }
  echo "</table>";
  ?>
  <a href="create.php" class="button">Create New Game</a>

</body>

</html>
