<?php
include("../includes/head.php");
?>


  <?php
  include("../includes/navbar.php");
  ?>
  <div class="container">
  <form method="post" action="../controllers/team/updateTeam.php">
    <input value="<?php echo $_GET['team_id']; ?>" type="hidden" name="team_id">
    Team Name: <input type="text" name="teamname">
    <br><br>
    <input type="submit">
  </form>
</body>
</html>
