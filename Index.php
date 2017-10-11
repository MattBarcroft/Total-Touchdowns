<?php
include("includes/head.php");
?>
<body>
  <?php
  include("includes/navbar.php");
  ?>
  <div class="container">

    <div class="text-center">
      <h1>Welcome to Total Touchdown</h1>
      <p class="lead"> <br>The free to play NFL touchdown prediction game.</p>
        <div class="flex-direction-column div-narrow centre-align">
      <?php
      if (isset($_GET['week_id'])) {
          $weekid = $_GET['week_id'];
      }
      echo "<h4>Week Number: ";
      for ($i = 1; $i < 17; $i++) {
          echo "&nbsp;<a href=index.php?week_id=$i>".$i."</a>&nbsp;";
      }
      echo "<h4>";

      ?>
    </div>
    </div>
  </div>
  <?php
  $games = new gamesFactory();
  if (isset($weekid)) {
      $rows = $games->select_games_by_week($weekid);
  } else {
      $rows = $games->select_games_by_week(1);
  }
  ?>
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
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2017</p>
      </div>
      <!-- /.container -->
    </footer>



  </body>

</html>
