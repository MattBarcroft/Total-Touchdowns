<?php
include("../includes/head.php");
?>


  <?php
  include("../includes/navbar.php");
  ?>
  <div class="container">
  <form method="post" action="../controllers/team/insertTeam.php">
    Team Name: <input type="text" name="teamname">
    <br><br>
    <input type="submit" >
  </form>
</body>
</html>
