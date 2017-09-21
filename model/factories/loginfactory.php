<?php
class loginfactory{
  include("../includes/init.php");

function check_login($username, $password){
$pdo = get_db();
//todo chancge db to include username and update query below

$r = $pdo->prepare("select * from TotalTouchdownsDB.Users
where username = :username");

$r->execute(':username' => $username);

$r = $r->fetch(PDO::FETCH_OBJ);
$user = new user();
$user->createtotaluser($r->user_id, $r->username, $r->firstname, $r->lastname, $r->address, $r->password,
 $r->email, $r->accountcreated, $r->accountmodified, $r->totalscore, $r->rgoptout);

 var_dump($user);

if (!is_null($r->firstname)) {
  return true;
}
else {
  return false;
}


}

}
 ?>
