<form id='form-bet-scores' method='post' action='../controllers/bet/insertBet.php'>
  <!-- Page Features -->
  <div class="well">
    <div class="row text-center container-flex">
      <?php
      foreach ($rows as $row) {
          ?>
        <div class="card-flex">
          <div class="card">
            <p class="card-text">
              <?php
              echo $row['kickoff_datetime'];
          echo " At ". $row['location']; ?>
            </p>
            <div class="col-md-4">
              <img class="card-img-top" src="/content/images/team.png"  alt="">
              <h6 class="card-title"><?php echo $row['htname']; ?></h6>
            </div>
            <div class="col-md-4 container-vs">
              <h4>V</h4>
            </div>
            <div class="col-md-4">
              <img class="card-img-top" src="/content/images/team.png"  alt="">
              <h6 class="card-title"><?php echo $row['atname']; ?></h6>
            </div>
            <div class="card-body">
            </div>
            <div class="flex-direction-row flex-grow full-width">
              <div class="flex-direction-row flex-grow score-controls">
                <div class="flex-direction-column flex-grow">
                  <button class='btn btn-primary btn-addsubtract-score btn-add-score' type='input'>+</button>
                  <button class='btn btn-primary btn-addsubtract-score btn-subtract-score' type='input'>-</button>
                </div>
                <div class="flex-direction-column flex-grow">
                  <?php
                  echo "<input name='gameid-".$row['game_id']."' value='".$row['game_id']."' type='hidden'>";
          echo "<input class='form-control input-bet-scores' value='0' id='htscore-game-".$row['game_id']."' name='htscore-game-".$row['game_id']."' type='text'>"; ?>
                </div>
              </div>
              <div class="flex-direction-row flex-grow score-controls">
                <div class="flex-direction-column flex-grow">
                  <?php
                  echo "<input class='form-control input-bet-scores' value='0' id='atscore-game-".$row['game_id']."' name='atscore-game-".$row['game_id']."' type='text'>"; ?>
                </div>
                <div class="flex-direction-column flex-grow">
                  <button class='btn btn-primary btn-addsubtract-score btn-add-score' type='input'>+</button>
                  <button class='btn btn-primary btn-addsubtract-score btn-subtract-score' type='input'>-</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
      } ?>
      <div class="flex-direction-row full-width">
        <div class="align-right">
          <input type="submit" class="btn btn-primary" value="Place Bets">
        </div>
      </div>
    </div>

  </div>
</form>
