<?php
class games{
  public $gameid;
  public $hometeamid;
  public $awayteamid;
  public $hometeamscore;
  public $awayteamscore;

  //getter and setter for gameid
  function set_gameid($gameid){
    $this->gameid = $gameid;
  }
  function get_gameid(){
    return $this->gameid;
  }

  //getter and setter for hometeamid
  function set_hometeamid($hometeamid){
    $this->hometeamid = $hometeamid;
  }
  function get_hometeamid(){
    return $this->hometeamid;
  }

  //getter and setter for awayteamid
  function set_awayteamid($awayteamid){
    $this->awayteamid = $awayteamid;
  }
  function get_awayteamid(){
    return $this->awayteamid;
  }

  //getter and setter for hometeamscore
  function set_hometeamscore($hometeamscore){
    $this->hometeamscore = $hometeamscore;
  }
  function get_hometeamscore(){
    return $this->hometeamscore;
  }

  //getter and setter for awayteamscore
  function set_awayteamscore($awayteamscore){
    $this->awayteamscore = $awayteamscore;
  }
  function get_awayteamscore(){
    return $this->awayteamscore;
  }
}
 ?>
