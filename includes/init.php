<?php
//if (session_status() != PHP_SESSION_NONE && session_status() != PHP_SESSION_DISABLED) {
session_start();
//}

date_default_timezone_set('GMT');

spl_autoload_register(function ($classname) {
    if (file_exists($_SERVER['DOCUMENT_ROOT']."/model/classes/"."$classname.php")) {
        require $_SERVER['DOCUMENT_ROOT']."/model/classes/"."$classname.php";
    } else {
        require $_SERVER['DOCUMENT_ROOT']."/model/factories/"."$classname.php";
    }
});

function get_db()
{
    $host ='127.0.0.1';
    $db = 'TotalTouchdownsDB';
    $userdb = 'user1';
    $pass = 'mypass';

    $dsn = "mysql:host=$host; dbname=$db";
    $pdo = new PDO($dsn, $userdb, $pass);
    return $pdo;
}
