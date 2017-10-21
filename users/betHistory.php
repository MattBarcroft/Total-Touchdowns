<?php
include("../includes/head.php");
?>
<body>
  <?php

  include("../includes/navbar.php");
  ?>
  <?php
  $games = new gamesFactory();
  $return = $games->most_recent_game_completed();
  $bets = new betsFactory();

  $lastweekarray = $return->fetch();
  $currentweek = (int)$lastweekarray[0]+1;

  isset($_GET['week_id']) ? $weekid = $_GET['week_id'] : $weekid = $currentweek;
  $rows = $games->select_games_by_week($weekid);

  ?>
  <?php if(isset($user_id) && $user_optout != 1){ ?>
  <div class="container">

    <div class="text-center">
        <div class="flex-direction-column div-narrow centre-align">
          <?php
          echo "<h2>Week Number: ".$weekid."</h2>";
          ?>
      <nav id="week-selector">
        <ul class="pagination">
          <li class="page-item <?php echo $weekid <= 1 ? "disabled greyed-out" : ""; ?>">
            <a class="page-link"  href="<?php echo "betHistory.php?week_id=".($weekid-1); ?>" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <?php
            for ($i = 1; $i <= 17; $i++) {
                echo "<li class='page-item";
                echo (int)$weekid == $i ? " active" : " ";
                echo $i < $currentweek  ? " completed-game" : " ";
                echo "'><a class='page-link' href='betHistory.php?week_id=".$i."'>".$i."</a></li>";
            }
            ?>

          <li class="page-item <?php echo $weekid >= 17 ? "disabled greyed-out" : ""; ?>">
            <a class="page-link" href="<?php echo "betHistory.php?week_id=".($weekid+1); ?>" aria-label="Next">
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
            include("../includes/userBets.php");
            ?>
      </div>
      <div class="col-md-3">
        <div class="well">
            <h3>Your Points</h3>
            <?php
            $leaderboardFactory = new leaderboardFactory();
            $userpointsarray = $leaderboardFactory->get_points_by_user($user_id);
            if($userpoints = $userpointsarray->fetch()){
                echo "<h1>".$userpoints['totalpoints']."</h1>";
            }

            ?>
        </div>
    </div>
    <?php }else{
      if ($user_optout == 1) {
        echo "<h3>You are opted out.</h3>";
      } else { echo "<h3>Please Login</h3>"; }
    }
    ?>
</div>

    <!-- /.container -->

    <!-- Footer -->
<?php
include("../includes/footer.php");
?>
  <script src="../content/script/mybets.js"></script>

  </body>

</html>
