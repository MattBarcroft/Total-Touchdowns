<?php
class loginfactory{
function check_login($username, $password){
$pdo = get_db();
//todo chancge db to include username and update query below
$r = $pdo->prepare("select * from TotalTouchdownsDB.Users
where firstname = :username and password = :password");

$r->execute(array(':username' => $username, ':password' => $password));

$r = $r->fetch(PDO::FETCH_OBJ);

if (!is_null($r->firstname)) {
  return true;
}
else {
  return false;
}


}

}
 ?>
