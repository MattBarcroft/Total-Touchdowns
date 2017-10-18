
<?php
if (isset($_COOKIE['username']) && $weekid == $currentweek) {
    ?>
      <div class="flex-direction-row full-width">
        <div class="centre-align" id="submit-btn-container">
          <input type="submit" class="btn btn-success btn-block" value="Submit Your Entry">
        </div>
      </div>
<?php
} else if (isset($_COOKIE['username']) && $weekid > $currentweek){
  ?>
      <div class='flex-direction-row full-width'>
        <div class='centre-align' id='submit-btn-container'>
          <a href='index.php?week_id=<?php echo $currentweek; ?>'><p>You cannot yet submit a prediction on this round. The current round is <?php echo $currentweek; ?></p></a>
        </div>
      </div>
<?php
}else if (isset($_COOKIE['username']) && $weekid < $currentweek){
  ?>
      <div class='flex-direction-row full-width'>
        <div class='centre-align' id='submit-btn-container'>
          <a href='index.php?week_id=<?php echo $currentweek; ?>'><p>This round has finished. The current round is <?php echo $currentweek; ?></p></a>
        </div>
      </div>
<?php
}
else{ 
?>
      <div class='flex-direction-row full-width'>
        <div class='centre-align' id='submit-btn-container'>
          <a href='users/login.php'><p>Please log in to bet</p></a>
        </div>
      </div>
<?php }?>