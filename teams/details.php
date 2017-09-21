<html>
<head>
  <title>Total touchdowns</title>
  <?php
  include("../includes/init.php");
  ?>
</head>

<body>
<?php

$teamid = $_GET['team_id'];
$teams = new teamsFactory();
$rows = $teams->select_single_team($teamid);

$r = $rows->fetchAll();
echo $r[0]['teamid'].$r[0]['name'];



?>
</body>
</html>
