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
  <form method="post" action="../logic/deleteTeam.php">
    Team Name:
  <select name="team_id">
    <?php
        $teams = new teamsFactory();
        $rows = $teams->select_all_teams();
        foreach($rows as $row){
             echo "<option value=".$row['team_id'].">".$row['name']."</option>";
        }
     ?>

  </select>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
