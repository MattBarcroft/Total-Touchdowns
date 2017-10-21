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
      echo "<form action=\"../controllers/user/makeAdmin.php\" method=\"post\">";
      echo "<input type=\"hidden\" name=\"userid\" value=" .  $user[0] . ">";
      for ($i=0; $i < count($users); $i++) {
        echo "<td>$user[$i]</td>";
      }
      echo "<td><input type=\"submit\" value=\"Toggle Admin\"></td>";
      echo "</form>";
      echo "</tr>";
    }
     ?>

  </table>
  <!-- <a href="create.php" class="button">Create New Game</a> -->

</div>




</body>

</html>
