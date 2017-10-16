<?php
include("../includes/head.php");
?>
<body>
  <?php
  include("../includes/navbar.php");
  ?>


    <!-- Page Content -->
    <div class="container">
      <h3>Leaderboard</h3>
      <table class="table">
        <tr>
          <th>Name</th>
          <th>Points</th>
        </tr>
        <?php
          $leaderboardFactory = new leaderboardFactory();
          $rows = $leaderboardFactory->get_all_leaderboard();

          foreach ($rows as $row) {
              var_dump($row);
              echo "<tr><td>".$row['position']."</td>";
              echo "<td>".$row['totalpoints']."</td>";
              echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
              echo "<tr>";
          }

      ?>
      </table>
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
