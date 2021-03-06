<?php
class user {
  public $userid;
  public $username;
  public $userfirstname;
  public $userlastname;
  public $useraddress;
  public $userpassword;
  public $useremail;
  public $useraccountcreated;
  public $useraccountmodified;
  public $usertotalscore;
  public $userrgoptout;

  function __construct(){
  }

  function user_construct($username, $userfirstname, $userlastname, $useraddress, $useremail, $userpassword) {
    $this->username = $username;
    $this->userfirstname = $userfirstname;
    $this->userlastname = $userlastname;
    $this->useraddress = $useraddress;
    $this->userpassword = $userpassword;
    $this->useremail = $useremail;
  }
  function user_constructAll($userid, $username, $userfirstname, $userlastname, $useraddress, $useremail,
  $userpassword, $useraccountcreated, $useraccountmodified, $usertotalscore, $userrgoptout){
    $this->userid = $userid;
    $this->username = $username;
    $this->userfirstname = $userfirstname;
    $this->userlastname = $userlastname;
    $this->useraddress = $useraddress;
    $this->userpassword = $userpassword;
    $this->useremail = $useremail;
    $this->useraccountcreated = $useraccountcreated;
    $this->useraccountmodified = $useraccountmodified;
    $this->usertotalscore = $usertotalscore;
    $this->userrgoptout = $userrgoptout;
  }


  //getter and setter for userid
  function set_userid($userid){
    $this->userid = $userid;
  }
  function get_userid(){
    return $this->userid;
  }

  //getter and setter for username
  function set_username($username){
    $this->username = $username;
  }
  function get_username(){
    return $this->username;
  }

  //getter and setter for userfirstname
  function set_userfirstname($userfirstname){
    $this->userfirstname = $userfirstname;
  }
  function get_userfirstname(){
    return $this->userfirstname;
  }

  //getter and setter for userlastname
  function set_userlastname($userlastname){
    $this->userlastname = $userlastname;
  }
  function get_userlastname(){
    return $this->userlastname;
  }

  //getter and setter for useraddress
  function set_useraddress($useraddress){
    $this->useraddress = $useraddress;
  }
  function get_useraddress(){
    return $this->useraddress;
  }

  //getter and setter for userpassword
  function set_userpassword($userpassword){
    $this->userpassword = $userpassword;
  }
  function get_userpassword(){
    return $this->userpassword;
  }

  //getter and setter for useremail
  function set_useremail($useremail){
    $this->useremail = $useremail;
  }
  function get_useremail(){
    return $this->useremail;
  }

  //getter and setter for useraccountcreated
  function set_useraccountcreated($useraccountcreated){
    $this->useraccountcreated = $useraccountcreated;
  }
  function get_useraccountcreated(){
    return $this->useraccountcreated;
  }

  //getter and setter for useraccountmodified
  function set_useraccountmodified($useraccountmodified){
    $this->useraccountmodified = $useraccountmodified;
  }
  function get_useraccountmodified(){
    return $this->useraccountmodified;
  }

  //getter and setter for usertotalscore
  function set_usertotalscore($usertotalscore){
    $this->usertotalscore = $usertotalscore;
  }
  function get_usertotalscore(){
    return $this->usertotalscore;
  }

  //getter and setter for userrgoptout
  function set_userrgoptout($userrgoptout){
    $this->userrgoptout = $userrgoptout;
  }
  function get_userrgoptout(){
    return $this->userrgoptout;
  }

  function verify_password($pass){
    return password_verify($pass, $this->userpassword);
  }

}
?>
