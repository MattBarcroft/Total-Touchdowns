<?php
class teams
{
    public $teamid;
    public $teamname;

    public function __construct($teamname)
    {
        $this->teamname = $teamname;
    }


    //getter and setter for teamid
    public function set_teamid($teamid)
    {
        $this->teamid = $teamid;
    }
    public function get_teamid()
    {
        return $this->teamid;
    }

    //getter and setter for teamname
    public function set_teamname($teamname)
    {
        $this->teamname = $teamname;
    }
    public function get_teamname()
    {
        return $this->teamname;
    }
}
