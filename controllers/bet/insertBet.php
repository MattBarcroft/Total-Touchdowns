<?php
include("../../includes/init.php");

$db = get_db();

$user = new userFactory();
$user_id = $user->getcurrentuserid();

$betsFactory = new betsFactory();
//insert validation so user can only place 1 bet
$bet_id = $betsFactory->insert_new_bet($user_id);

$betsFactory->insert_selections($bet_id, $_POST);

header("Location: /index.php");
