<?php

class betSelections
{

  public $bet_id;
  public $bet_created;
  public $home_team_id;
  public $home_team_name;
  public $home_team_score;
  public $away_team_id;
  public $away_team_name;
  public $away_team_score;
  public $select_id;

  public function construct($bet_id, $bet_created, $home_team_name, $away_team_name, $home_team_score, $away_team_score, $home_team_id, $away_team_id, $select_id)
  {
    $this->bet_id = $bet_id;
    $this->bet_created = $bet_created;
    $this->home_team_name = $home_team_name;
    $this->home_team_score = $home_team_score;
    $this->away_team_name = $away_team_name;
    $this->away_team_score = $away_team_score;
    $this->home_team_id = $home_team_id;
    $this->away_team_id = $away_team_id;
    $this->select_id = $select_id;
  }
  }
 ?>
