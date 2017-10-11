<?php
include("../includes/head.php");
include("../includes/navbar.php");

$userFactory = new userFactory();
$user = $userFactory->getCurrentUser();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Details</title>
    <div class="container">
      <h2>User Details</h2>
    </div>

  </head>
  <body>
      <div class="container">
        <table>
          <tr>
            <td>Username: </td>
            <td><? echo $user->username; ?></td>
          </tr>
          <tr>
            <td>Firstname: </td>
            <td><? echo $user->userfirstname; ?></td>
          </tr>
          <tr>
            <td>Lastname: </td>
            <td><? echo $user->userlastname; ?></td>
          </tr>
          <tr>
            <td>Email: </td>
            <td><? echo $user->useremail; ?></td>
          </tr>
          <tr>
            <td>Date Created: </td>
            <td><? echo $user->useraccountcreated; ?></td>
          </tr>
        </table>
      </div>

      <div class="container">
      <h2>Responsible Gambling</h2>
      <form action="../controllers/user/optout.php">
      <input type="submit" name="" value="Opt out">
      </form>
      </div>

  </body>
</html>
