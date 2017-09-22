<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}


spl_autoload_register(function($classname){
        if(file_exists($_SERVER['DOCUMENT_ROOT']."/model/classes/"."$classname.php")){
            Require $_SERVER['DOCUMENT_ROOT']."/model/classes/"."$classname.php";
        }
        else {
            Require $_SERVER['DOCUMENT_ROOT']."/model/factories/"."$classname.php";
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
