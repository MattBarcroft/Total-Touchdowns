<?php
include("../includes/head.php");
?>


  <?php
  include("../includes/navbar.php");
  ?>
  <div class="container">
<?php

$teamid = $_GET['team_id'];
$teams = new teamsFactory();
$rows = $teams->select_single_team($teamid);

$r = $rows->fetchAll();
echo "Team ID: ".$r[0]['team_id']."<br>Team Name: ".$r[0]['name'];



?>
</body>
</html>
