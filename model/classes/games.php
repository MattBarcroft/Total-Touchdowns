<?php
class games
{
    public $gameid;
    public $hometeamid;
    public $awayteamid;
    public $hometeamactualscore;
    public $awayteamactualscore;
    public $kickoff_datetime;
    public $location;
    public $week_id;
    public $hometeamlogo;
    public $awayteamlogo;


    public function __construct($hometeamid, $awayteamid, $kickoff_datetime, $week_id, $location)
    {
        $this->hometeamid = $hometeamid;
        $this->awayteamid = $awayteamid;
        $this->kickoff_datetime = $kickoff_datetime;
        $this->week_id = $week_id;
        $this->location = $location;
    }
    //getter and setter for gameid
    public function set_gameid($gameid)
    {
        $this->gameid = $gameid;
    }
    public function get_gameid()
    {
        return $this->gameid;
    }

    //getter and setter for hometeamid
    public function set_hometeamid($hometeamid)
    {
        $this->hometeamid = $hometeamid;
    }
    public function get_hometeamid()
    {
        return $this->hometeamid;
    }

    //getter and setter for awayteamid
    public function set_awayteamid($awayteamid)
    {
        $this->awayteamid = $awayteamid;
    }
    public function get_awayteamid()
    {
        return $this->awayteamid;
    }

    //getter and setter for hometeamscore
    public function set_hometeamactualscore($hometeamactualscore)
    {
        $this->hometeamactualscore = $hometeamactualscore;
    }
    public function get_hometeamactualscore()
    {
        return $this->hometeamactualscore;
    }

    //getter and setter for awayteamscore
    public function set_awayteamactualscore($awayteamactualscore)
    {
        $this->awayteamactualscore = $awayteamactualscore;
    }
    public function get_awayteamactualscore()
    {
        return $this->awayteamactualscore;
    }

    //getter and setter for kickoffdate
    public function set_kickoffdate($kickoff_datetime)
    {
        $this->kickoff_datetime = $kickoff_datetime;
    }
    public function get_kickoffdate()
    {
        return $this->kickoff_datetime;
    }

    //getter and setter for location
    public function set_location($location)
    {
        $this->location = $location;
    }
    public function get_location()
    {
        return $this->location;
    }

    //getter and setter for weekid
    public function set_weekid($weekid)
    {
        $this->week_id = $weekid;
    }
    public function get_weekid()
    {
        return $this->week_id;
    }

    //getter and setter for home team logo
    public function set_hometeamlogo($hometeamlogo)
    {
        $this->hometeamlogo = $hometeamlogo;
    }
    public function get_hometeamlogo()
    {
        return $this->hometeamlogo;
    }

    //getter and setter for away team logo
    public function set_awayteamlogo($awayteamlogo)
    {
        $this->awayteamlogo = $awayteamlogo;
    }
    public function get_awayteamlogo()
    {
        return $this->awayteamlogo;
    }
}
