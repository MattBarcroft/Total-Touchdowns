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

// public function getWeekId()
// {
//   $pdo = get_db();
//   $currDateTime = date('Y/m/d h:m:s');
//
//   $r = $pdo->prepare("
//     SELECT week_id FROM TotalTouchdownsDB.Games
//     where kickoff_datetime > ':dt'
//     order by kickoff_datetime asc
//     limit 1
//   ");
//
//   $r->execute(array(':dt' => $currDateTime));
// }
