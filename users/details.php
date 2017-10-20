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
  </head>

  <body>
      <div class="container">
        <h2>User Details</h2>
        <table>
          <tr>
            <td>Username: </td>
            <td><?php echo $user->username; ?></td>
          </tr>
          <tr>
            <td>Firstname: </td>
            <td><?php echo $user->userfirstname; ?></td>
          </tr>
          <tr>
            <td>Lastname: </td>
            <td><?php echo $user->userlastname; ?></td>
          </tr>
          <tr>
            <td>Email: </td>
            <td><?php echo $user->useremail; ?></td>
          </tr>
          <tr>
            <td>Date Created: </td>
            <td><?php echo $user->useraccountcreated; ?></td>
          </tr>
        </table>
      </div>

      <div class="container">
        <h2>View Bets</h2>
        <form action="../users/viewBets.php" method="post">
          <input type="submit" value="View Bets">
        </form>
      </div>

      <div class="container">
      <h2>Responsible Gambling</h2>
      <form action="../users/optout.php">
      <input type="submit" value="Opt out">
      </form>
      </div>

  </body>
</html>
