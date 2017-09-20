<?php
class userFactory {

  function insertUser($user){
    $pdo = get_db();

    $r = $pdo->prepare("
        INSERT INTO TotalTouchdownsDB.Users (firstname, lastname, address, password, email, rgoptout)
        VALUES (:firstname, :lastname, :address, :password, :email, :rgoptout)");

    $r->execute(array(':firstname' => $user->get_userfirstname(),':lastname' => $user->get_userlastname(),
            ':address' => $user->get_useraddress(),':password' => $user->get_userpassword(),
            ':email' => $user->get_useremail(),':rgoptout' => 0));

  }

  // function getSingleUser($userid){
  //   $pdo = getDB();
  //   $r = $pdo->prepare("select user_id, firstname, lastname, address, password, email, accountcreated, rgoptout
  //    from TotalTouchdownsDB.User
  //    where userid = :userid
  //    limit 1");
  //   var_dump($pdo)
  //   $r->execute(':userid' => $userid);
  //   $dataRow = $r->fetch(PDO::FETCH_OBJ);
  //   echo $r->name;
  //   //$user = new user($r->name, );
  //
  //   return $user;
  // }
  //
  // function getAllUser(){
  //   $query = "select * from TotalTouchdownsDB.User";
  // }
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
