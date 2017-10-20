<?php
include("../includes/head.php");

include("../includes/navbar.php");

  $userFactory = new userFactory();

  $users = $userFactory->getAllUsers2();
?>

<div class="container">
  <table>
    <th>User ID</th>
    <th>Username</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Email</th>
    <th>Opted Out</th>
    <th>Admin</th>

    <?php

    foreach ($users as $user) {
      echo "<tr>";

      for ($i=0; $i < count($users); $i++) {
        echo "<td>$user[$i]</td>";
      }
      echo "<td><button type=\"button\" name=\"adminbutton\" onclick=\"<someScript>\">Make Admin</button></td>";
      echo "</tr>";
    }
     ?>

  </table>
  <!-- <a href="create.php" class="button">Create New Game</a> -->

</div>




</body>

</html>
