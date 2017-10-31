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

      <?php if ($userFactory->is_Admin() == 1) {  ?>
      <div class="container">
        <h2>Admin</h2>
        <p>Use this to access admin options</p>
          <select name="dropdown" onchange="location = this.value">
          <option value="details.php">-</option>
          <option value="adminIndex.php">User Details</option>
          //add more admin options here
          <option value=""></option>
        </select>
      </div>
    <?php } ?>

  </body>
</html>
