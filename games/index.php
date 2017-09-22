<html>
<head>
  <title>Total touchdowns</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="../content/script/main.js"></script>
  <link href="../content/style/main.css" rel="stylesheet">
  <?php
  include("../includes/init.php");
  ?>
</head>

<body>
  <?php
  $weekid = $_GET['week_id'];
  echo "<form id='weekpicker' method='get' action='index.php'>";
  echo "<select name='week_id'>";

    for ($i = 1; $i < 53; $i++) {
        if ($weekid == $i) {
            $selected = "selected";
        } else {
            $selected = "";
        }
        echo "<option $selected value=".$i.">".$i."</option>";
    }

  echo "</select>";
  echo "<input type='submit'>";
  echo "</form>";
  $games = new gamesFactory();
  if (isset($weekid)) {
      $rows = $games->select_games_by_week($weekid);
  } else {
      $rows = $games->select_all_games();
  }
  ?>
  <div class="container">


  <div class="col-md-1">


  </div>
  <form id='week_bets_form' method='post' action='../controllers/bet/insertBet.php'>;
  <div class="col-md-10">

      <?php
      foreach ($rows as $row) {
          echo "<div class='col-md-5 individual-game'>";
          echo "<div class='col-md-12 game-header'>";
          echo $row['kickoff_datetime']." - ";
          echo $row['location'];
          echo "</div>";
          echo "<div class='col-md-6'>";
          echo "<div class='team-name-header'>";
          echo "<h4>".$row['htname']."</h4>";
          echo "</div>";
          echo "<button class='btn btn-primary btn-subtract-score' type='input'>-</button>";
          echo "<input class='form-control form-bet-scores' value='0' name='htscore-game-".$row['game_id']."' id='htscore-game-".$row['game_id']."' type='text'>";
          echo "<button class='btn btn-primary btn-add-score' type='input'>+</button>";
          echo "</div>";
          echo "<div class='col-md-1'></div>";

          echo "<div class='col-md-6'>";
          echo "<div class='team-name-header'>";
          echo "<h4>".$row['atname']."</h4>";
          echo "</div>";
          echo "<button class='btn btn-primary btn-subtract-score' type='input'>-</button>";
          echo "<input class='form-control form-bet-scores' value='0' id='atscore-game-".$row['game_id']."' name='atscore-game-".$row['game_id']."' type='text'>";
          echo "<button class='btn btn-primary btn-add-score' type='input'>+</button>";
          echo "</div>";

          echo "</div>";
          echo "<div class='col-md-1'></div>";
      }
      ?>
  </div>

  <div class="col-md-1">


  </div>
  </div>
  <input type='submit'>
</form>
</body>

</html>
