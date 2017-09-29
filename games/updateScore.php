<?php
include("../includes/head.php");
?>


  <?php
  include("../includes/navbar.php");
  ?>
  <div class=container>
  <?php
  $game_id = $_GET["game_id"];

  $games = new gamesFactory();
  $gamesrows = $games->select_single_game($game_id);
  $r = $gamesrows->fetchAll();

  $defaultDate = substr($r[0]['kickoff_datetime'], 0, -9);
  ?>

</head>
<body>

  <form method="post" action="../controllers/game/updateScore.php">
  <input type="hidden" name="game_id" value="<?php echo $game_id?>">
    <p>Hometeam Score:</p>
        <input type="text" name="hometeamactualscore">

    <p>Awayteam Score:</p>
        <input type="text" name="awayteamactualscore">

    <p>
    <br>
    <input type="submit" value="Submit"></p>
    </form>

</body>
</html>
