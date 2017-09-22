<?php
include("../includes/init.php");
?>
<html>
<head>
  <title>Total touchdowns</title>

</head>

<body>
  <?php
  $users = new userFactory();
  $rows = $users->getAllUsers();
  echo "<table>";
  echo "<tr><th>User Id</th>";
  echo "<th>First Name</th>";
  echo "<th>Last Name</th>";
  echo "<th>Address</th>";
  echo "<th>Email</th>";
  echo "<th>Details</th>";
  echo "<th>Delete</th>";
  echo "<th>Update</th></tr>";
  foreach($rows as $row){
    echo "<tr><td>".$row['user_id']."</td>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td><a href=details.php?user_id=".$row['user_id'].">"."Details</a></td>";
    echo "<td><a href=delete.php?user_id=".$row['user_id'].">"."Delete</a></td>";
    echo "<td><a href=update.php?user_id=".$row['user_id'].">"."Update</a></td>";
  }
  echo "</table>";
  ?>
  <a href="create.php" class="button">Create New User</a>

</body>

</html>
