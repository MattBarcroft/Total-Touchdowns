<?php

spl_autoload_register(function($classname){
        if(file_exists("../objects/"."$classname.php")){
            Require "../objects/"."$classname.php";
        }
        else if(file_exists("../logic/"."$classname.php"))
        {
          Require "../logic/"."$classname.php";
        }
        else {
            Require "../factories/"."$classname.php";
        }
});

function get_db(){

    $host ='127.0.0.1';
    $db = 'TotalTouchdownsDB';
    $userdb = 'user1';
    $pass = 'mypass';

    $dsn = "mysql:host=$host; dbname=$db";
    $pdo = new PDO($dsn, $userdb, $pass);
    return $pdo;

}
 ?>
