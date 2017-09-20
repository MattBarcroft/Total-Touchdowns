<html>
<head>
  <title>Total touchdowns</title>
  <?php
  include("../includes/init.php");
  ?>
</head>

<body>
  <?php
  $teams = new teamsFactory();
  $rows = $teams->select_all_teams();
  echo "<table><tr><th>Team ID</th><th>Team Name</th></tr>";
  foreach($rows as $row){
    echo "<tr><td>".$row['team_id']."</td><td>".$row['name']."</td></tr>";
  }
  echo "</table>";
  ?>

</body>

</html>
