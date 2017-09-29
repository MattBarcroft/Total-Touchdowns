<?php
include("../includes/head.php");
?>


  <?php
  include("../includes/navbar.php");
  ?>
  <div class=container>

  <form method="post" action="../controllers/game/insertGame.php">
    <p>Hometeam:</p>
    <?php
      $teams = new teamsFactory();
      $rows = $teams->select_all_teams();
      echo "<select name='hometeam_id'>";
      foreach ($rows as $row) {
          echo "<option value=".$row['team_id'].">".$row['name']."</option>";
      };
      echo "</select>";
    ?>
    <p>Awayteam:</p>
    <?php
      $teams = new teamsFactory();
      $rows = $teams->select_all_teams();
      echo "<select name='awayteam_id'>";
      foreach ($rows as $row) {
          echo "<option value=".$row['team_id'].">".$row['name']."</option>";
      };
      echo "</select>";
    ?>
    <br><br>
    Date: <input type="text" name="kickoff_datetime" id="datepicker">
    <br><br>
    Week No: <input type="text" name="week_id">
    <br><br>
    Location: <input type="text" name="location">
    <input type="submit" >
  </form>
  <script>
    $( function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );
  </script>
</div>
</body>
</html>
