<?php
include("../../includes/init.php");

$db = get_db();

var_dump($_POST);

$user_id = 1;

$betsFactory = new betsFactory();

$bet_id = $betsFactory->insert_new_bet($user_id);

$betsFactory->insert_selections($bet_id, $_POST);

//header("Location: /games/index.php");
