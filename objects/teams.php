<?php
class teams{
public $teamid;
public $teamname;

  function __construct($teamid, $teamname)
  {
    $this->teamid = $teamid;
    $this->tablename = $teamname;
}


//getter and setter for teamid
function set_teamid($teamid){
  $this->teamid = $teamid;
}
function get_teamid(){
  return $this->teamid;
}

//getter and setter for teamname
function set_teamname($teamname){
  $this->teamname = $teamname;
}
function get_teamname(){
  return $this->teamname;
}

}
 ?>
