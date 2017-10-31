<?php
include("../../includes/init.php");

$db = get_db();

$user = new userFactory();
$user_id = $user->getcurrentuserid();

$betsFactory = new betsFactory();

var_dump($_POST);
foreach ($_POST as $key => $value) { 
    if(!ctype_digit($value)){
        die(header("HTTP/1.0 403 Forbidden"));
        break;
    }
    
}
$bet_id = $betsFactory->insert_new_bet($user_id, $_POST["tiebreaker"]);
$betsFactory->insert_selections($bet_id, $_POST);

?>