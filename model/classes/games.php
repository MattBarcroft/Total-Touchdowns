<?php
class games{
  public $gameid;
  public $hometeamid;
  public $awayteamid;
  public $hometeamactualscore;
  public $awayteamactualscore;
  public $kickoffdate;
  public $location;
  public $weekid;

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
  function set_hometeamactualscore($hometeamactualscore){
    $this->hometeamactualscore = $hometeamactualscore;
  }
  function get_hometeamactualscore(){
    return $this->hometeamactualscore;
  }

  //getter and setter for awayteamscore
  function set_awayteamactualscore($awayteamactualscore){
    $this->awayteamactualscore = $awayteamactualscore;
  }
  function get_awayteamactualscore(){
    return $this->awayteamactualscore;
  }

  //getter and setter for kickoffdate
  function set_kickoffdate($kickoffdate){
    $this->kickoffdate = $kickoffdate;
  }
  function get_kickoffdate(){
    return $this->kickoffdate;
  }

  //getter and setter for location
  function set_location($location){
    $this->location = $location;
  }
  function get_location(){
    return $this->location;
  }

  //getter and setter for weekid
  function set_weekid($weekid){
    $this->weekid = $weekid;
  }
  function get_weekid(){
    return $this->weekid;
  }

}
 ?>
