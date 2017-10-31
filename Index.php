<?php
include("includes/head.php");
?>
<body>
  <?php

  include("includes/navbar.php");
  ?>

  <!-- for opted out gamblers -->
  <?php
      $uf = new userFactory();
      $oo = $uf->is_opted_out();
      if ($oo == 0) {
  ?>

  <?php
  $games = new gamesFactory();
  $return = $games->most_recent_game_completed();
  $lastweekarray = $return->fetch();
  $currentweek = (int)$lastweekarray[0]+1;
  isset($_GET['week_id']) ? $weekid = $_GET['week_id'] : $weekid = $currentweek;
  if (isset($weekid)) {
      $rows = $games->select_games_by_week($weekid);
  } else {
      $rows = $games->select_games_by_week($currentweek);
  }

  ?>
  <div class="container">

    <div class="text-center">
      <h1>Welcome to Total Touchdown</h1>
      <p class="lead"> <br>The free to play NFL touchdown prediction game.</p>
        <div class="flex-direction-column div-narrow centre-align">
          <?php
                    echo "<h2>Week Number: ".$weekid."</h2>";
                    ?>
      <nav id="week-selector">
        <ul class="pagination">
          <li class="page-item <?php echo $weekid <= 1 ? "disabled greyed-out" : ""; ?>">
            <a class="page-link"  href="<?php echo "index.php?week_id=".($weekid-1); ?>" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <?php
            for ($i = 1; $i <= 17; $i++) {
                echo "<li class='page-item";
                echo (int)$weekid == $i ? " active" : " ";
                echo $i < $currentweek  ? " completed-game" : " ";
                echo "'><a class='page-link' href='index.php?week_id=".$i."'>".$i."</a></li>";
            }
            ?>

          <li class="page-item <?php echo $weekid >= 17 ? "disabled greyed-out" : ""; ?>">
            <a class="page-link" href="<?php echo "index.php?week_id=".($weekid+1); ?>" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    </div>
  </div>

    <!-- Page Content -->
    <div class="container">

      <div class="col-md-9">
            <?php
            include("includes/gameBets.php");
            ?>
      </div>
      <div class="col-md-3">
        <?php
        include("includes/homeLeaderboard.php");
        ?>
    </div>
</div>

    <!-- /.container -->

    <!-- Footer -->


<!-- for opted out gamblers -->
<?php
} else {echo "<div class=\"container\"><h1>You are opted out of gambling</h1></div>";}
include("includes/footer.php");
?>


  </body>

</html>
