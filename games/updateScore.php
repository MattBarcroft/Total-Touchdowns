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

  <form method="post" action="../controllers/game/updateDetails.php">
    <p>Hometeam:</p>
    <?php

      $teams = new teamsFactory();
      $rows = $teams->select_all_teams();

      echo "<select name='hometeam_id'>";
      foreach ($rows as $row) {
          if ($r[0]['hometeam_id'] == $row['team_id']) {
              $selected = "selected";
          } else {
              $selected = "";
          }
          echo "<option $selected value=".$row['team_id'].">".$row['name']."</option>";
      };
      echo "</select>";
    ?>
    <p>Awayteam:</p>
    <?php
    $teams = new teamsFactory();
    $rows = $teams->select_all_teams();
    echo "<select name='awayteam_id'>";
    foreach ($rows as $row) {
        if ($r[0]['awayteam_id'] == $row['team_id']) {
            $selected = "selected";
        } else {
            $selected = "";
        }
        echo "<option $selected value=".$row['team_id'].">".$row['name']."</option>";
    };
    echo "</select>";
    ?>
    <br><br>
    <?php
    echo "Date: <input type='text' name='kickoff_datetime' id='datepicker'>";
    ?>
    <br><br>
    Week No: <input type="text" name="week_id">
    <br><br>
    Location: <input type="text" name="location">
    <input type="submit" >
  </form>
  <script>
    $( function() {
        $( "#datepicker" ).datepicker({ defaultDate: <?php echo '"'.$defaultDate.'"'; ?>, dateFormat: 'yy-mm-dd' });
    } );
  </script>
</body>
</html>
