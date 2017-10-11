<?php
$command = "mysql -uroot < /Users/cjo01/Documents/Total-Touchdowns/sql/createDB.sql";

$output = shell_exec($command);

$command = "mysql -uroot < /Users/cjo01/Documents/Total-Touchdowns/sql/inserts.sql";

$output = shell_exec($command);

$command = "mysql -uroot < /Users/cjo01/Documents/Total-Touchdowns/sql/insertsweek2.sql";

$output = shell_exec($command);


 ?>
