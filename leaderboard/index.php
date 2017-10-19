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
          <th>Position</th>
          <th>Name</th>
          <th>Points</th>
        </tr>
        <?php
          $leaderboardFactory = new leaderboardFactory();
          $rows = $leaderboardFactory->get_all_leaderboard();
          $i = 1;
          foreach ($rows as $row) {
              echo "<tr>";
              echo "<td>".$i."</td>";
              echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
              echo "<td>".$row['totalpoints']."</td>";
              echo "</tr>";
              $i++;
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
