<?php
include("../includes/head.php");
?>


  <?php
  include("../includes/navbar.php");
  ?>
  <div class=container>
    <?php
      $betsFactory = new betsFactory();
      $rows = $betsFactory->get_winners();
      ?>
      <h3>This page shows all bets which have been awarded 25 points</h3>
      <table class="table">
      <tr>
        <th>Bet Id</th>
        <th>User Id</th>
        <th>Week Id</th>
        <th>Tiebreaker Diff</th>
      </tr>
        <?php
        foreach ($rows as $row) {
          echo "<tr><td>".$row[0]."</td>";
          echo "<td>".$row[1]."</td>";
          echo "<td>".$row[2]."</td>";
          echo "<td>".$row[4]."</td>";
          echo "<tr>";
        }
        ?>
        </table>
  </div>
  </body>
  </html>
