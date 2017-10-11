<?php
include("../includes/head.php");
include("../includes/navbar.php");
 ?>
<html>
<head>
</head>
<body>

  <div class="container">
<h2>Log in</h2>
    <form method="post" action="../controllers/user/checklogin.php">
      <table>
    <tr><td> Username: <input type="text" name="username"></td></tr>
    <tr><td> Password:  <input type="password" name="password"></td></tr>
    <tr><td><input type="submit"></td></tr>
      </table>
    </form>
  </div>
  <div class="container">
<h2>Register</h2>
<form action="create.php">
  <input type="submit" name="" value="Register">
</form>
  </div>

</body>
</html>
