<script>
      $(function () {
        $('#form-bet-scores').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            url: '../controllers/bet/insertBet.php',
            data: $('#form-bet-scores').serialize(),
            success: function () {
              alert('Your bet was submitted successfully');
              window.location.reload();
            }
          });
        });
      });
    </script>
<form id='form-bet-scores'>
  <!-- Page Features -->

  <div class="well">
          <div class="row text-center container-flex">
      <?php
      foreach ($rows as $row) {
        $gameResultsReleased;
        $betplacedflag = 0;
        if($row['hometeamactualscore'] != NULL){
          $gameResultsReleased = 1;
        }
        else{
          $gameResultsReleased = 0;
        }
        if($lastbetplaced == $currentweek){
          $betplacedflag = 1;
          $betselection = $betsFactory->select_single_bet_selections_by_user_week_game($user_id, $weekid, $row['game_id']);
          
        }

          ?>
        <div class="card-flex">
          <div class="card">
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
                <button class='btn btn-primary btn-addsubtract-score btn-add-score' type='input'
                    <?php 
                    if($gameResultsReleased == 1 || $currentweek < $weekid || $lastbetplaced == $currentweek){
                     echo "disabled='disabled'";
                    }; ?>>
                  +</button>
                  <button class='btn btn-primary btn-addsubtract-score btn-subtract-score' type='input'
                    <?php 
                    if($gameResultsReleased == 1 || $currentweek < $weekid || $lastbetplaced == $currentweek ){
                     echo "disabled='disabled'";
                    }; ?>>
                  -</button>
                </div>
                <div class="flex-direction-column flex-grow">
                <?php
                  echo "<input name='gameid-".$row['game_id']."' value='".$row['game_id']."' type='hidden'>";
                  if($gameResultsReleased == 1 || $currentweek < $weekid || $betplacedflag == 1 ){
                    echo "<input class='form-control input-bet-scores' id='htscore-game-".$row['game_id']."' 
                    name='htscore-game-".$row['game_id']."' type='text' readonly value='".$row['hometeamactualscore']."'>";
                  }else{
                    echo "<input class='form-control input-bet-scores' id='htscore-game-".$row['game_id']."' 
                    name='htscore-game-".$row['game_id']."' type='text' value='0'>";
                  }
                  // $row['hometeamactualscore'];
                  // $betselection[0]->home_team_score; //compare these 2
                  ?>
                </div>
              </div>
              <div class="flex-direction-row flex-grow score-controls">
                <div class="flex-direction-column flex-grow">
                  <?php
                  echo "<input name='gameid-".$row['game_id']."' value='".$row['game_id']."' type='hidden'>";
                  if($gameResultsReleased == 1 || $currentweek < $weekid || $betplacedflag == 1){
                    echo "<input class='form-control input-bet-scores' id='atscore-game-".$row['game_id']."' 
                    name='atscore-game-".$row['game_id']."' type='text' readonly value='".$row['awayteamactualscore']."'>";
                  }else{
                    echo "<input class='form-control input-bet-scores' id='atscore-game-".$row['game_id']."' 
                    name='atscore-game-".$row['game_id']."' type='text' value='0'>";
                  }
                  ?>
                </div>
                <div class="flex-direction-column flex-grow">
                  <button class='btn btn-primary btn-addsubtract-score btn-add-score' type='input'
                    <?php 
                    if($gameResultsReleased == 1 || $currentweek < $weekid || $lastbetplaced == $currentweek ){
                     echo "disabled='disabled'";
                    }; ?>>
                  +</button>
                  <button class='btn btn-primary btn-addsubtract-score btn-subtract-score' type='input'
                    <?php 
                    if($gameResultsReleased == 1 || $currentweek < $weekid || $lastbetplaced == $currentweek){
                     echo "disabled='disabled'";
                    }; ?>>
                  -</button>
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
      <div class="card">
        <p class="card-text" id="tiebreaker-header">
          Tiebreaker - Touchdowns in First Quarter
        </p>
        <div>
          <p>
          The final Tiebreaker will determine the winner if two or more predictions are correct.
          </p>

        </div>
        <div class="flex-direction-row flex-grow score-controls">
                <div class="flex-direction-column flex-grow">
                  <button class="btn btn-gold btn-addsubtract-score btn-add-score" type="input" 
                  <?php 
                    if($gameResultsReleased == 1 || $currentweek < $weekid || $lastbetplaced == $currentweek){
                     echo "disabled='disabled'";
                    }; ?>>+</button>
                  <button class="btn btn-gold btn-addsubtract-score btn-subtract-score" type="input"
                  <?php 
                    if($gameResultsReleased == 1 || $currentweek < $weekid || $lastbetplaced == $currentweek){
                     echo "disabled='disabled'";
                    }; ?>>-</button>
                </div>
                <div class="flex-direction-column flex-grow">
                <input name="tiebreaker" value="tiebreaker" type="hidden"><input class="form-control input-bet-scores" id="tiebreaker" name="tiebreaker" type="text" value="0"
                <?php 
                    if($gameResultsReleased == 1 || $currentweek < $weekid || $lastbetplaced == $currentweek){
                     echo "disabled='disabled'";
                    }; ?>
                >               
              </div>
              </div>
      </div>
      </div>
<?php include("submitBet.php"); ?>
</div>

  </div>
</form>
