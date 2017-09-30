<?php
include("../includes/head.php");
include("../includes/navbar.php");
 ?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
  <div class="container">
  <form method="post" action="../controllers/user/insertUser.php">
    Username: <input type="text" name="username">
    <br><br>
    First Name: <input type="text" name="firstname">
    <br><br>
    Last Name: <input type="text" name="lastname">
    <br><br>
    Email: <input type="text" name="email">
    <br><br>
    Address: <input type="text" name="address" >
    <br><br>
    Password: <input type="password" name="password">
    <br><br>
    <input type="submit">
  </form>
    </div>
</body>
</html>
