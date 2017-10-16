<?php
$command = "mysql -uroot < ".__DIR__."/createDB.sql";

$output = shell_exec($command);

$command = "mysql -uroot < ".__DIR__."/inserts.sql";

$output = shell_exec($command);

$command = "mysql -uroot < ".__DIR__."/insertsweek2.sql";

$output = shell_exec($command);


 ?>
