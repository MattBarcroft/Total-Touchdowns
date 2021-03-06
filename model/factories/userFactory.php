<?php
class userFactory {

  function insertUser($user){
    $pdo = get_db();
//todo add handling to let user know if username already exists
    $r = $pdo->prepare("
        INSERT INTO TotalTouchdownsDB.Users (username, firstname, lastname, address, password, email, rgoptout)
        VALUES (:username, :firstname, :lastname, :address, :password, :email, :rgoptout)");

    $r->execute(array(':username' => $user->get_username(), ':firstname' => $user->get_userfirstname(),':lastname' => $user->get_userlastname(),
            ':address' => $user->get_useraddress(),':password' => $user->get_userpassword(),
            ':email' => $user->get_useremail(),':rgoptout' => 0));

  }
  public function check_username($username)
  {
    $pdo = get_db();

    $r = $pdo->prepare("SELECT * FROM TotalTouchdownsDB.Users where username = :username");

    $r->execute(array(':username' => $username));

    $user = $r->fetchAll();

    if (count($user) > 0) {
      return 1;
    }
    else {return 0;}


  }
function getcurrentuserid(){
$pdo = get_db();
$r = $pdo->prepare("select user_id from TotalTouchdownsDB.users where username = :username");

$r->execute(array(':username' => $_COOKIE['username']));
$userid = $r->fetch(PDO::FETCH_NUM);

return $userid[0];

}

function getCurrentUser(){
  if (isset($_COOKIE['username'])) {
    $pdo = get_db();

    $r = $pdo->prepare("select user_id, username, firstname, lastname, address, password,
    email, accountcreated, accountmodified, totalscore, rgoptout from TotalTouchdownsDB.users where username = :username");

    $r->execute(array(':username' => $_COOKIE['username']));
    $user = new user();
    $userArr = $r->fetchAll();
    //$username, $userfirstname, $userlastname, $useraddress, $useremail,
    //$userpassword, $useraccountcreated, $useraccountmodified, $usertotalscore, $userrgoptout
    $user->user_constructAll($userArr[0]["user_id"], $userArr[0]["username"], $userArr[0]["firstname"], $userArr[0]["lastname"],
    $userArr[0]["address"], $userArr[0]["email"], $userArr[0]["password"], $userArr[0]["accountcreated"],
    $userArr[0]["accountmodified"], $userArr[0]["totalscore"], $userArr[0]["rgoptout"]);

    return $user;

  }
}

  function getAllUsers(){
    $pdo = get_db();

    $r = $pdo->prepare("
        SELECT firstname, lastname, address, password, email FROM TotalTouchdownsDB.Users");

    $r->execute();
    return $r->FetchAll();

  }

  function getAllUsers2(){
    $pdo = get_db();

    $r = $pdo->prepare("
        SELECT user_id, username, firstname, lastname, address, email, rgoptout, admin FROM TotalTouchdownsDB.Users");

    $r->execute();
    return $r->FetchAll();

  }

  function makeAdmin($uid){
    $pdo = get_db();

    $r = $pdo->prepare("
        update TotalTouchdownsDB.Users set admin= !admin where user_id = :uid");

        $r->execute(array(':uid' => $uid));
  }

  public function is_Admin()
  {
    $pdo = get_db();
    if (isset($_SESSION["username"])) {
      $username = $_SESSION["username"];

      $r = $pdo->prepare("select admin from TotalTouchdownsDB.Users where username = :username");

      $r->execute(array(':username' => $username));

      $isadmin = $r->fetch();

      return $isadmin[0];
    }
    else return 0;
  }

  function optout($uid){
    $pdo = get_db();

    $r = $pdo->prepare("
        Update TotalTouchdownsDB.Users
        set rgoptout = 1
        where user_id = :uid");

    $r->execute(array(':uid' => $uid));

    return;
  }

  public function is_opted_out()
  {
    $pdo = get_db();
    if (isset($_SESSION["username"])) {
      $username = $_SESSION["username"];

      $r = $pdo->prepare("select rgoptout from TotalTouchdownsDB.Users where username = :username");

      $r->execute(array(':username' => $username));

      $isoptedout = $r->fetch();

      return $isoptedout[0];
    }
    else return 0;
  }
}

 ?>
