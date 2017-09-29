<?php
include("../includes/head.php");
?>


  <?php
  include("../includes/navbar.php");
  ?>
  <div class="container">
  <?php
  $teams = new teamsFactory();
  $rows = $teams->select_all_teams();
  echo "<table class='table'>";
  echo "<tr><th>Team ID</th>";
  echo "<th>Team Name</th>";
  echo "<th>Details</th>";
  echo "<th>Delete</th>";
  echo "<th>Update</th></tr>";
  foreach ($rows as $row) {
      echo "<tr><td>".$row['team_id']."</td>";
      echo "<td>".$row['name']."</td>";
      echo "<td><a href=details.php?team_id=".$row['team_id'].">"."Details</a></td>";
      echo "<td><a href=delete.php?team_id=".$row['team_id'].">"."Delete</a></td>";
      echo "<td><a href=update.php?team_id=".$row['team_id'].">"."Update</a></td>";
  }
  echo "</table>";
  ?>
  <a href="create.php" class="button">Create New Team</a>
</div>
</body>

</html>
