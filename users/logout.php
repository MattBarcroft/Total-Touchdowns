<?php
include("../includes/init.php");

 $lf = new loginfactory();

 $lf->clear_session();

 header("Location: ../index.php");

 ?>
