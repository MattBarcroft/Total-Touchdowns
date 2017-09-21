<?php
class bet{

public $betid;
public $userid;
public $betplaced;
public $selection;

// public function bet($obj){
//   $this->betid = $obj->betid;
// }

//getter and setter for betid
function get_betid(){
  return $this->betid;
}
function set_betid($betid){
  $this->betid = $betid;
}

//getter and setter for userid
function set_userid($userid){
  $this->userid = $userid;
}
function get_userid(){
  return $this->userid;
}

//getter and setter for gameid
function set_selection($selection){
  $this->selection = $selection;
}
function get_selection(){
  return $this->selection;
}

//getter and setter for gameid
function set_betplaced($betplaced){
  $this->betplaced = $betplaced;
}
function get_betplaced(){
  return $this->betplaced;
}


}
 ?>
