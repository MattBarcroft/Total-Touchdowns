<?php
class userFactory{





  function insertUser($user){
    $host ='127.0.0.1';
    $db = 'TotalTouchdownsDB';
    $userdb = 'user1';
    $pass = 'mypass';

    $dsn = "mysql:host=$host; dbname=$db";
    $pdo = new PDO($dsn, $userdb, $pass);

    $r = $pdo->prepare("
        INSERT INTO TotalTouchdownsDB.Users (firstname, lastname, address, password, email, rgoptout)
        VALUES (:firstname, :lastname, :address, :password, :email, :rgoptout)");

    $r->execute(array(':firstname' => $user->get_firstname(),':lastname' => $user->get_lastname(),
            ':address' => $user->get_address(),':password' => $user->get_password(),
            ':email' => $user->get_email(),':rgoptout' => 0));
    // $r->execute(['firstname' => $user->get_firstname()],['lastname' => $user->get_lastname(),
    //         ['address' => $user->get_address()],['password' => $user->get_password()],
    //         ['email' => $user->get_email()],['rgoptout' => 0]);
  }


}


 ?>
