<?php
class selection{
    public $selection_id;
    public $bet_id;
    public $game_id;
    public $hometeamactualscore;
    public $awayteamactualscore;

    //getter and setter for selectionid
    function get_selectionid(){
      return $this->selection_id;
    }
    function set_selectionid($selection_id){
        $this->selectionid = $selection_id;
    }

    //getter and setter for betid
    function get_betid(){
      return $this->betid;
    }
    function set_betid($betid){
      $this->betid = $betid;
    }

    //getter and setter for game_id
    function get_gameid(){
      return $this->game_id;
    }
    function set_gameid($game_id){
      $this->game_id = $game_id;
    }

    //getter and setter for $hometeamactualscore
    function get_hometeamactualscore(){
      return $this->hometeamactualscore;
    }
    function set_hometeamactualscore($hometeamactualscore){
      $this->hometeamactualscore = $hometeamactualscore;
    }

    //getter and setter for $hometeamactualscore
    function get_awayteamactualscore(){
      return $this->awayteamactualscore;
    }
    function set_awayteamactualscore($awayteamactualscore){
      $this->awayteamactualscore = $hometeamactualscore;
    }
}


 ?>
