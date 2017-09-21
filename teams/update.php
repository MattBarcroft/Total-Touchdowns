<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="post" action="../controllers/team/updateTeam.php">
    <input value="<?php echo $_GET['team_id']; ?>" type="hidden" name="team_id">
    Team Name: <input type="text" name="teamname">
    <br><br>
    <input type="submit">
  </form>
</body>
</html>
