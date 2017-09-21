<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php
    include("../includes/init.php");
   ?>
</head>
<body>
  <h1>Are you sure you want to delete this? </h1>
  <form method="post" action="../controllers/team/deleteTeam.php">
    Team Name:
    <?php
      $teamid = $_GET['team_id'];
      $team = new teamsFactory();
      $rows = $team->select_single_team($teamid);
      $r = $rows->fetchAll();
      echo $r[0]['name'];
      echo "<input type='hidden' value=".$r[0]['team_id']." name='team_id'>";
     ?>
    <br><br>
    <input type="submit">
  </form>
</body>
</html>
