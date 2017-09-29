<?php
include("../includes/head.php");
?>


  <?php
  include("../includes/navbar.php");
  ?>
  <div class="container">
  <form method="get" action="../teams/update.php">
    Team Name:
  <select name="team_id">
    <?php
        $teams = new teamsFactory();
        $rows = $teams->select_all_teams();
        foreach ($rows as $row) {
            echo "<option value=".$row['team_id'].">".$row['name']."</option>";
        }
     ?>

  </select>
    <br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
