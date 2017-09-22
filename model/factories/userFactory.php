<?php
class userFactory {

  function insertUser($user){
    $pdo = get_db();

    $r = $pdo->prepare("
        INSERT INTO TotalTouchdownsDB.Users (username, firstname, lastname, address, password, email, rgoptout)
        VALUES (:username, :firstname, :lastname, :address, :password, :email, :rgoptout)");

    $r->execute(array(':username' => $user->get_username(), ':firstname' => $user->get_userfirstname(),':lastname' => $user->get_userlastname(),
            ':address' => $user->get_useraddress(),':password' => $user->get_userpassword(),
            ':email' => $user->get_useremail(),':rgoptout' => 0));

  }

//   function checkUsername($username){
//     $pdo = get_db();
//
//     $r = $pdo->prepare("select username from TotalTouchdownsDB.User where username = :username");
//     $r->execute(array(':username' => $username));
//
//     $obj = $r->fetch(PDO::FETCH_OBJ);
// echo $obj->username;
//     if (!is_null($obj->username)) {
//       return false;
//     }
//     else return true;
//   }

  // function getSingleUser($userid){
  //   $pdo = getDB();
  //   $r = $pdo->prepare("select user_id, firstname, lastname, address, password, email, accountcreated, rgoptout
  //    from TotalTouchdownsDB.User
  //    where userid = :userid
  //    limit 1");
  //
  //   $r->execute(':userid' => $userid);
  //   $dataRow = $r->fetch(PDO::FETCH_OBJ);
  //
  //
  //   $user = new user();
  //
  //   return $user;
  // }

  function getAllUsers(){
    $pdo = get_db();

    $r = $pdo->prepare("
        SELECT firstname, lastname, address, password, email FROM TotalTouchdownsDB.Users");

    $r->execute();
    return $r;

  }
  //
  // function updateUser(){
  //
  // }
  //
  // function deleteUser(){
  //
  // }


}


 ?>
