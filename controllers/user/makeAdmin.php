<?php
include("../../includes/init.php");

//work out how to pull values through from front end, possibly create objs and present them
$uid = $_POST("");
$admin = $_POST("");

$userFactory = new userFactory();

$userFactory->makeAdmin();


 ?>
