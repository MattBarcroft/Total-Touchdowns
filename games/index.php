<?php
include("../includes/head.php");
?>
<body>
  <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Total Touchdown</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <?php
  if (isset($_GET['week_id'])) {
      $weekid = $_GET['week_id'];
  }

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
