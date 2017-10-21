<?php
include("../../includes/init.php");

$uid = $_POST["userid"];

$userFactory = new userFactory();

$userFactory->makeAdmin($uid);
header('Location:../../users/adminIndex.php');

 ?>
