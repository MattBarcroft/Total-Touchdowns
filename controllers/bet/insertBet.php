<?php
include("../../includes/init.php");

$db = get_db();

$user = new userFactory();
$user_id = $user->getcurrentuserid();

$betsFactory = new betsFactory();
//strip tags
$bet_id = $betsFactory->insert_new_bet($user_id, $_POST["tiebreaker"]);

$betsFactory->insert_selections($bet_id, $_POST);

header("Location: /index.php");
