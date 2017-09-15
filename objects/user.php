<?php
class user{
  public $userid;
  public $username;

  //getter and setter for username
  function set_username($username){
    $this->username = $username;
  }
  function get_username(){
    $this->username;
  }

  //getter and setter for userid
  function set_userid($userid){
    $this->userid = $userid;
  }
  function get_userid(){
    $this->userid;
  }
}
?>
