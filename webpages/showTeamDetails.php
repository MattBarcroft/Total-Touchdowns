<html>
<head>
  <title>Total touchdowns</title>
  <?php
  include("../includes/init.php");
  ?>
</head>

<body>
<?php

$teamid = $_GET['teamid'];
$teams = new teamsFactory();
$rows = $teams->select_single_team($teamid);

foreach($rows as $row){
  echo $row['team_id'].$row['name'];
}
echo $row[0]['team_id'].$row[0]['name'];

?>
</body>
</html>
