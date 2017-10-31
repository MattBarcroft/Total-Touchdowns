<?php
include("../includes/head.php");
?>
<body>
  <?php

  include("../includes/navbar.php");
  ?>
   <style>
        .button {
            background-color: rgba(16, 114, 190, 0.57);
            width: 100%;
            text-align: left;
            padding: 8px;
            border: none;
            cursor: pointer;
            border-bottom-style: solid;
            border-width: thin;
            border-color:rgba(255, 255, 255, 0.43) ;

           }
        #downArrow{
            float: right;
        }

       .myDropdown{
            display: none;
            width: 100%;
            padding: 8px;
            background-color: #fff;
            color: rgb(18,45,124);

       }

       .show{
            display: block;
        }

   </style>
  </head>
  <body>
   <div class="container">
      <div>
            <!-- How To Play  -->
            <h2 class ="txt-ctr">How To Play</h2>

            <br>
<div class="buttonMenu">



<div class="button" onclick="clickedMenu('md')">How do I register?<div id="downArrow">&#9660;</div></div>
<div class= "myDropdown" id='md'>
<p>In order to enter the Total Touchdown competition, you will be required to register for an account. 
Just click on Login/Register in the top right corner of the page, click the Register button, fill in your personal details 
and choose a username and password to sign up.
</p>
</div>


<div class="button" onclick="clickedMenu('md1')">How do I play?<div id="downArrow">&#9660;</div></div>
<div class = "myDropdown" id='md1'>
  <p>A player must predict the touchdown results from the five selected Total Touchdown matches each week, as well as predicting the total number of touchdowns scored in the first quarter in those same 5 matches for the tie-breaker.
  </p>
  <p>Points are accumulated over the course of the season and players are entered into a leaderboard against other players.
  </p>
  <p>Points are awarded on a weekly basis as follows:<br>
  5 points for each correct score prediction, or<br>
  2 points for predicting the correct number of touchdowns from any one team.
  </p>
  <p>Players will not score points for correctly predicting the number of touchdowns scored in the first quarter. This prediction will only be used to determine the winner in case of a tie-breaker.
  </p>
  <p>The deadline for entries is 1 hour before the scheduled kick off time of the Total Touchdown matches. Entries can be edited as many times as a player wishes before the deadline for the round.
  </p>


</div>


<div class="button" onclick="clickedMenu('md2')">How do I win?<div id="downArrow">&#9660;</div></div>
  <div class = "myDropdown" id='md2'>
    <p>To win the £250,000 jackpot prize, all 5 touchdown scores must be predicted correctly. If two or more players correctly predict all 5 results, the tie-breaker will be used to determine the winner.
    </p>
    <p>The overall top points scorer for the season will win £10,000.
    </p>
    <p>Winners will be contacted by email.
    </p>
</div>


<div class="button" onclick="clickedMenu('md3')">What happens if any of the games are postponed or are not played?<div id="downArrow">&#9660;</div></div>
  <div class = "myDropdown" id='md3'>
    <p>You will still be able to collect points from the games that are played.
    </p>
    <p>You will be unable to win the weekly jackpot if one or more of the games are not played or postponed. Five correct predictions must be achieved to win the weekly jackpot.
    </p>
</div>


<script>
function clickedMenu(id){
    document.getElementById(id).classList.toggle("show");

}

</script>

     </div>
    </div>

  </body>
    <script src="<?php echo '../js/jquery-3.2.1.min.js'?>"> </script>
    <script src="<?php echo '../js/indexLogic.js'?>"> </script>
 
</html>

