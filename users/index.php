<html>
<head>
  <title>Total touchdowns</title>
  <?php
  include("../includes/init.php");
  ?>
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
  echo "<th>Email</th></tr>";
  echo "<th>Details/th>";
  echo "<th>Delete</th>";
  echo "<th>Update</th></tr>";
  foreach($rows as $row){
    echo "<tr><td>".$row['user_id']."</td>";
    echo "<td>".$row['firstname']."</td>";
    echo "<tr><td>".$row['lastname']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td><a href=details.php?team_id=".$row['team_id'].">"."Details</a></td>";
    echo "<td><a href=delete.php?team_id=".$row['team_id'].">"."Delete</a></td>";
    echo "<td><a href=update.php?team_id=".$row['team_id'].">"."Update</a></td>";
  }
  echo "</table>";
  ?>
  <a href="create.php" class="button">Create New User</a>

</body>

</html>
