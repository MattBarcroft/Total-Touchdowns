<?php
class loginfactory{
  //include("../../includes/init.php");

function check_login($username, $password){
$pdo = get_db();
//todo chancge db to include username and update query below

$r = $pdo->prepare("select * from TotalTouchdownsDB.Users
where username = :username");

$r->execute(array(':username' => $username));

$r = $r->fetch(PDO::FETCH_OBJ);

$user = new user($r->username, $r->firstname, $r->lastname, $r->address, $r->email, $r->password);

return $user->verify_password($password);


}

function create_session($username, $password){

$password = password_hash($password, PASSWORD_DEFAULT );
  $_SESSION["username"] = $username;
  $_SESSION["password"] = $password;

setcookie("username", $_SESSION["username"], time()+60, "/");
setcookie("password", $_SESSION["password"], time()+60, "/");
return;
}

function clear_session(){
  unset($_SESSION['username']);
  unset($_SESSION['password']);

  session_unset();
  session_destroy();

  setcookie("username", "", time()+60, "/");
  setcookie("password", "", time()+60, "/");
}

function confirm_user($username, $password){

}

function check_logged_in(){
$seshusername = $_SESSION["username"];
$seshpassword =  $_SESSION["password"];

if (isset($_SESSION["username"]) && isset($_SESSION['password'])) {
  return true;
}
else return false;


}


}
 ?>
