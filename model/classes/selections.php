<?php
class selections
{
    public $selection_id;
    public $bet_id;
    public $game_id;
    public $hometeamactualscore;
    public $awayteamactualscore;
    public $pointsawarded;

    //getter and setter for selectionid
    public function get_selectionid()
    {
        return $this->selection_id;
    }
    public function set_selectionid($selection_id)
    {
        $this->selection_id = $selection_id;
    }

    //getter and setter for betid
    public function get_betid()
    {
        return $this->bet_id;
    }
    public function set_betid($bet_id)
    {
        $this->bet_id = $bet_id;
    }

    //getter and setter for game_id
    public function get_gameid()
    {
        return $this->game_id;
    }
    public function set_gameid($game_id)
    {
        $this->game_id = $game_id;
    }

    //HOME TEAM ACTUAL SCORE NEEDS CHANGING TO HOME TEAM SCORE



    //getter and setter for $hometeamactualscore
    public function get_hometeamactualscore()
    {
        return $this->hometeamactualscore;
    }
    public function set_hometeamactualscore($hometeamactualscore)
    {
        $this->hometeamactualscore = $hometeamactualscore;
    }

    //getter and setter for $hometeamactualscore
    public function get_awayteamactualscore()
    {
        return $this->awayteamactualscore;
    }
    public function set_awayteamactualscore($awayteamactualscore)
    {
        $this->awayteamactualscore = $awayteamactualscore;
    }

    //getter and setter for $hometeamactualscore
    public function get_pointsawarded()
    {
        return $this->pointsawarded;
    }
    public function set_pointsawarded($pointsawarded)
    {
        $this->pointsawarded = $pointsawarded;
    }
}
