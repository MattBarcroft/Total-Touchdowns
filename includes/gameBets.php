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
        if($row['hometeamactualscore'] != NULL){
          $gameResultsReleased = 1;
        }
        else{
          $gameResultsReleased = 0;
        }

          ?>
        <div class="card-flex">
          <div class="card">
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
                  <?php echo ($gameResultsReleased != 1 ?: "disabled='disabled'") .">"; ?>
                  +</button>
                  <button class='btn btn-primary btn-addsubtract-score btn-subtract-score' type='input'
                  <?php echo ($gameResultsReleased != 1 ?: "disabled='disabled'") .">"; ?>
                  -</button>
                </div>
                <div class="flex-direction-column flex-grow">
                <?php
                  echo "<input name='gameid-".$row['game_id']."' value='".$row['game_id']."' type='hidden'>";
                  if($gameResultsReleased != 1){
                    echo "<input class='form-control input-bet-scores' id='htscore-game-".$row['game_id']."' 
                    name='htscore-game-".$row['game_id']."' type='text' value='0'>";
                  }else{
                    echo "<input class='form-control input-bet-scores' id='htscore-game-".$row['game_id']."' 
                    name='htscore-game-".$row['game_id']."' type='text' readonly value='".$row['hometeamactualscore']."'>";
                  }
                  ?>
                </div>
              </div>
              <div class="flex-direction-row flex-grow score-controls">
                <div class="flex-direction-column flex-grow">
                  <?php
                  echo "<input name='gameid-".$row['game_id']."' value='".$row['game_id']."' type='hidden'>";
                  if($gameResultsReleased != 1){
                    echo "<input class='form-control input-bet-scores' id='atscore-game-".$row['game_id']."' 
                    name='atscore-game-".$row['game_id']."' type='text' value='0'>";
                  }else{
                    echo "<input class='form-control input-bet-scores' id='atscore-game-".$row['game_id']."' 
                    name='atscore-game-".$row['game_id']."' type='text' readonly value='".$row['awayteamactualscore']."'>";
                  }
                  ?>
                </div>
                <div class="flex-direction-column flex-grow">
                  <button class='btn btn-primary btn-addsubtract-score btn-add-score' type='input'
                  <?php echo ($gameResultsReleased != 1 ?: "disabled='disabled'") .">"; ?>
                  +</button>
                  <button class='btn btn-primary btn-addsubtract-score btn-subtract-score' type='input'
                  <?php echo ($gameResultsReleased != 1 ?: "disabled='disabled'") .">"; ?>
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
                  <button class="btn btn-gold btn-addsubtract-score btn-add-score" type="input" 1="">                  +</button>
                  <button class="btn btn-gold btn-addsubtract-score btn-subtract-score" type="input" 1="">                  -</button>
                </div>
                <div class="flex-direction-column flex-grow">
                <input name="tiebreaker" value="tiebreaker" type="hidden"><input class="form-control input-bet-scores" id="tiebreaker" name="tiebreaker" type="text" value="0">               
              </div>
              </div>
      </div>
      </div>


<?php
if (isset($_COOKIE['username'])) {
    ?>
      <div class="flex-direction-row full-width">
        <div class="align-right">
          <input type="submit" class="btn btn-primary" value="Place Bets">
        </div>
      </div>
<?php
} else {
  echo "<div class='flex-direction-row full-width'>";
  echo "<div class='align-right'>";
        echo "<p>Please log in to bet</p>";
        echo "</div>";
        echo "</div>";
    }?>
    </div>

  </div>
</form>
