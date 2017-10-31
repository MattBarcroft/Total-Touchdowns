
<div class="well">
          <div class="row text-center container-flex">
      <?php
      foreach ($rows as $row) {
        $gameResultsReleased = 0;
        $betplacedflag = 0;
        if($row['hometeamactualscore'] != NULL){
          $gameResultsReleased = 1;
        }
        else{
          $gameResultsReleased = 0;
        }


          if($betselection = $betsFactory->select_single_bet_selections_by_user_week_game($user_id, $weekid, $row['game_id'])){
            $betplacedflag = 1;    
            //echo "<h1>".var_dump($betselection)."</h1>"; 
          }



          ?>
        <div class="card-flex">
          <div class="card card-user-bets">
            <?php if ($currentweek > $row['week_id']){
              echo "<div id='corner-triangle' class='round-complete'>";
	            echo "<div class='corner-triangle-text text-capitalize'>";
              echo "<span class='corner-triangle-firstline'>Game</span><br>Complete";
              echo "</div>";
              echo "</div>";
            } else if ($currentweek < $row['week_id']) {
              echo "<div id='corner-triangle' class='round-not-ready'>";
              echo "<div class='corner-triangle-text text-capitalize'>";
              echo "<span class='corner-triangle-firstline'>Round</span><br>Closed";
              echo "</div>";
              echo "</div>";
            }
            ?>
          <p class="card-text">
              <?php
              $kickoffdt = date('d/m/Y h:ia', strtotime($row['kickoff_datetime']));
              echo $kickoffdt;
              echo " At ". $row['location'];
              ?>
            </p>
          <div class="card-inner">

            <div class="col-md-4 padding-zero">
              <img class="card-img-top" src="/content/images/<?php echo $row['htlogo'];?>"  alt="">
              <h6 class="card-title text-align-center"><?php echo $row['htname']; ?></h6>
            </div>
            <div class="col-md-4 container-vs">
              <h4>V</h4>
            </div>
            <div class="col-md-4 padding-zero">
              <img class="card-img-top" src="/content/images/<?php echo $row['atlogo'];?>"  alt="">
              <h6 class="card-title text-align-center"><?php echo $row['atname']; ?></h6>
            </div>
            <div class="card-body">
            </div>
            <div class="flex-direction-row flex-grow full-width">
              <div class="flex-direction-row flex-grow score-controls">
                <div class="flex-direction-column flex-grow">
                <p>Game Result</p>
                <?php
                  echo "<input class='game-number' name='gameid-".$row['game_id']."' value='".$row['game_id']."' type='hidden'>";
                  if($gameResultsReleased == 1){
                    echo "<input class='form-control input-bet-scores' id='htscore-game-result-".$row['game_id']."' 
                    name='htscore-game-".$row['game_id']."' type='text' readonly value='".$row['hometeamactualscore']."'>";
                  }else{
                    echo "<input class='form-control input-bet-scores' id='htscore-game-result-".$row['game_id']."' 
                    name='htscore-game-".$row['game_id']."' readonly type='text' value=''>";
                  }
                  ?>
                  </div>
                  <div class="flex-direction-column flex-grow">
                  <p>Your Bet</p>
                  <?php
                  echo "<input name='gameid-".$row['game_id']."' value='".$row['game_id']."' type='hidden'>";
                  if($betplacedflag == 1){
                    echo "<input class='form-control input-bet-scores' id='htscore-bet-result-".$row['game_id']."' 
                    name='htscore-game-".$row['game_id']."' type='text' readonly value='".$betselection[4]."'>";
                  }else{
                    echo "<input class='form-control input-bet-scores' id='htscore-bet-result-".$row['game_id']."' 
                    name='htscore-game-".$row['game_id']."' type='text' readonly value=''>";
                  }


                  
                  // $row['hometeamactualscore'];
                  // $betselection[0]->home_team_score; //compare these 2
                  ?>
                </div>
              </div>
              <div class="flex-direction-row flex-grow score-controls">
                <div class="flex-direction-column flex-grow">
                    <p>Game Result</p>
                  <?php
                  echo "<input name='gameid-".$row['game_id']."' value='".$row['game_id']."' type='hidden'>";
                  if($gameResultsReleased == 1 || $currentweek < $weekid || $betplacedflag == 1){
                    echo "<input class='form-control input-bet-scores' id='atscore-game-result-".$row['game_id']."' 
                    name='atscore-game-".$row['game_id']."' type='text' readonly value='".$row['awayteamactualscore']."'>";
                  }else{
                    echo "<input class='form-control input-bet-scores' id='atscore-game-result-".$row['game_id']."' 
                    name='atscore-game-".$row['game_id']."' type='text' readonly>";
                  }
                  ?>
                </div>
                  <div class="flex-direction-column flex-grow">
                  <p>Your Bet</p>
                  <?php
                  echo "<input name='gameid-".$row['game_id']."' value='".$row['game_id']."' type='hidden'>";
                  if($betplacedflag == 1){
                    echo "<input class='form-control input-bet-scores' id='atscore-bet-result-".$row['game_id']."' 
                    name='atscore-game-".$row['game_id']."' type='text' readonly value='".$betselection[5]."'>";
                  }else{
                    echo "<input class='form-control input-bet-scores' id='atscore-bet-result-".$row['game_id']."' 
                    name='atscore-game-".$row['game_id']."' type='text' readonly value=''>";
                  }

                  // $row['hometeamactualscore'];
                  // $betselection[0]->home_team_score; //compare these 2
                  ?>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <?php
      }
      ?>
      <div class="card-flex">
      <div class="card card-user-bets">
        <p class="card-text" id="tiebreaker-header">
          Tiebreaker - Touchdowns in First Quarter
        </p>
        <div>
          <p>
          <?php echo $weekid; ?>
          The final Tiebreaker will determine the winner if two or more predictions are correct.
          </p>

        </div>
        <?php
        isset($_GET['week_id']) ? $weekid = $_GET['week_id'] : $weekid = $currentweek;
        
        $return = $games->first_quarter_td_by_week($weekid);
        $returnbet = $bets->select_bet_by_user_week($user_id, $weekid);
        
        if($first_quarter_td_array = $return->fetch()){
            $first_quarter_td_actual = $first_quarter_td_array[0];
        }

        if($first_quarter_td_bet_array = $returnbet->fetch()){
           
            $first_quarter_td_bet = $first_quarter_td_bet_array[0];
            
        }

        ?>
        <div class="flex-direction-row flex-grow score-controls">
                <div class="flex-direction-column flex-grow">
                <p>Game Result</p>
                <input class="form-control input-bet-scores tiebreaker" id="tiebreaker-1" type="text" disabled='disabled'
                <?php 
                    if($gameResultsReleased == 1){
                     echo "value='".$first_quarter_td_actual."'";
                    }; ?>
                > 
                </div>
                <div class="flex-direction-column flex-grow">
                <p>Your Bet</p>
                <input class="form-control input-bet-scores tiebreaker" id="tiebreaker-2" disabled='disabled' type="text" 
                <?php 
                    if($betplacedflag == 1){
                        echo "value='".$first_quarter_td_bet."'";
                    }; ?>
                >               
              </div>
              </div>
      </div>
      </div>

</div>
</div>
               