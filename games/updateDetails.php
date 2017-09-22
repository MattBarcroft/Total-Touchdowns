<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <title>Document</title>
  <?php
  include("../includes/init.php");
  $game_id = $_GET["game_id"];

  $games = new gamesFactory();
  $gamesrows = $games->select_single_game($game_id);
  $r = $gamesrows->fetchAll();

  $defaultDate = substr($r[0]['kickoff_datetime'], 0, -9);
  ?>
  <script>
    $( function() {
        $( "#datepicker" ).datepicker({ defaultDate: <?php echo '"'.$defaultDate.'"'; ?>, dateFormat: 'yy-mm-dd' });
    } );
  </script>
</head>
<body>

  <form method="post" action="../controllers/game/insertGame.php">
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
</body>
</html>
