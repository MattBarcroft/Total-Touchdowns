<?php
include("../includes/head.php");
?>


  <?php
  include("../includes/navbar.php");
  ?>
  <div class="container">
  <h1>Are you sure you want to delete this? </h1>
  <form method="post" action="../controllers/game/deleteGame.php">
    Game:
    <?php
      $gameid = $_GET['game_id'];
      $game = new gamesFactory();
      $rows = $game->select_single_game($gameid);
      $r = $rows->fetchAll();
      echo $r[0]['htm.name'];
      echo "<input type='hidden' value=".$r[0]['game_id']." name='game_id'>";
      echo $gameid;
     ?>
    <br><br>
    <input type="submit">
  </form>
</body>
</html>
