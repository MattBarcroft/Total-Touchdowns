<?php


function create_db_object(){
  $host = '127.0.0.1';
  $db = 'TotalTouchdownsDB';
  $user = 'user1';
  $pass = 'mypass';

  $dsn = "mysql:host=$host;dbname=$db";
  $pdo = new PDO($dsn, $user, $pass);

  return $pdo;
}


 ?>
