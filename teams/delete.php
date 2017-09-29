<?php
include("../includes/head.php");
?>


  <?php
  include("../includes/navbar.php");
  ?>
  <div class="container">
  <h1>Are you sure you want to delete this? </h1>
  <form method="post" action="../controllers/team/deleteTeam.php">
    Team Name:
    <?php
      $teamid = $_GET['team_id'];
      $team = new teamsFactory();
      $rows = $team->select_single_team($teamid);
      $r = $rows->fetchAll();
      echo $r[0]['name'];
      echo "<input type='hidden' value=".$r[0]['team_id']." name='team_id'>";
     ?>
    <br><br>
    <input type="submit">
  </form>
</body>
</html>
