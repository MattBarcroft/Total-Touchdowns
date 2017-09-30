<div class="navbar navbar-inverse navbar-fixed-top" id="navbar-upper" role="navigation">
<div class="container">
	<div class="navbar-header">
        <div class="navbar-header"><a class="navbar-brand" href="../index.php">Total Touchdown</a></div>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>

	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav pull-right">
			<?php if (isset($_COOKIE["username"])) {
    ?>
			<li><a href="">
             <span class="glyphicon glyphicon-user"></span>&nbsp;
						 <span class="visible-lg-inline visible-md-inline"><?echo $_COOKIE["username"];?></span>
        </a></li>
				<li><a href="../users/logout.php">
							 <span class="visible-lg-inline visible-md-inline">Log Out</span>
	        </a></li>
			<?php
} else {
        ?>
			<li><a href="../users/login.php">
             <span class="glyphicon glyphicon-user"></span>&nbsp;
						 <span class="visible-lg-inline visible-md-inline">Login/Register</span>
        </a></li>
				<?php
    };
                ?>
		</ul>
</div>
	</div>
</div>
<div class="navbar navbar-inverse navbar-static-top" id="navbar-lower" role="navigation">
  <div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>

	<div class="collapse navbar-collapse">

		<ul class="nav navbar-nav">
			<li><a href="../index.php">Home</a></li>
			<li><a href="../index.php">Play</a></li>
			<li><a href="#">Leaderboard</a></li>
    	<li><a href="#">Results</a></li>
		</ul>


	</div>
</div>
</div>
