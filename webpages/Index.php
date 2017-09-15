<html>
<head>
  <title>Total touchdowns</title>
</head>

<body>
  <form action="" method="post">
    <table>
      <?php
function readFromFile($filename){
$fp = fopen($filename, "r");
$contents = [];
  if ($fp != false) {
    $contents = fread($fp, filesize($filename));
  }
  return $contents;
}
      $matches = readFromFile("../games.txt");
      $teams = readFromFile("../teams.txt");

      for ($i=5; $i < 5; $i++) {

        $str = "<tr>ass</tr>";
        $d = new DOMDocument();
        $d->loadHTML($str);

        //todo fix frontend

      //   echo "<tr>
      //  <td>" . $teams[$matches[$i]->get_hometeamid] . "</td>
      //   <td>
      //     <input type=\"text\" name=\"m1\" value=\"Home Team Score: \">
      //     <input type=\"text\" name=\"m2\" value=\"Away Team Score: \">
      //     </td>
      //   </tr>";
      }

      ?>

    </table>
    <input type="submit">
  </form>

  <?php

  ?>

</body>

</html>
