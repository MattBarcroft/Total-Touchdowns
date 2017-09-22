<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <title>Document</title>
  <?php
  include("../includes/init.php");
  ?>
  <script>
    $( function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );
  </script>
</head>
<body>
  <form method="post" action="../controllers/game/insertGame.php">
    <p>Hometeam:</p>
    <?php
      $teams = new teamsFactory();
      $rows = $teams->select_all_teams();
      echo "<select name='hometeam_id'>";
      foreach ($rows as $row) {
          echo "<option value=".$row['team_id'].">".$row['name']."</option>";
      };
      echo "</select>";
    ?>
    <p>Awayteam:</p>
    <?php
      $teams = new teamsFactory();
      $rows = $teams->select_all_teams();
      echo "<select name='awayteam_id'>";
      foreach ($rows as $row) {
          echo "<option value=".$row['team_id'].">".$row['name']."</option>";
      };
      echo "</select>";
    ?>
    <br><br>
    Date: <input type="text" name="kickoff_datetime" id="datepicker">
    <br><br>
    Week No: <input type="text" name="week_id">
    <br><br>
    Location: <input type="text" name="location">
    <input type="submit" >
  </form>
</body>
</html>
