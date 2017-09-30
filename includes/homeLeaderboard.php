<div class="well">
<h3>Leaderboard</h3>
<table class="table">
  <tr>
    <th>Name</th>
    <th>Points</th>
  </tr>
  <?php
    $leaderboardFactory = new leaderboardFactory();
    $rows = $leaderboardFactory->get_top_10_leaderboard();
    foreach ($rows as $row) {
        echo "<tr><td>".$row['totalpoints']."</td>";
        echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
        echo "<tr>";
    }

?>
</table>
</div>
