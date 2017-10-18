<div class="navbar-fixed-top" id="" role="navigation">
<div id="product-wrapper">
    <div class="container">
        <div class="product-list">

            <a rel="external" class="product-item" data-app-name="skybet" data-app-link="http://www.skybet.com?dcmp=s6_nav-tn82&amp;AFF_ID=1197312425" href="http://www.skybet.com?dcmp=s6_nav-tn82&amp;AFF_ID=1197312425">
                <img class="product-image" src="../content/images/crossSaleProducts/skybet.png">
            </a>
            
            <a rel="external" class="product-item" data-app-name="super6" data-app-link="https://super6.skysports.com/?AFF_ID=1197315468&dcmp=pick7_nav_tn82" href="https://super6.skysports.com/?AFF_ID=1197315468&dcmp=pick7_nav_tn82">
                <img class="product-image" src="../content/images/crossSaleProducts/super6.png">
            </a>

            <a rel="external" class="product-item" data-app-name="SkyFF" data-app-link="https://fantasyfootball.skysports.com?dcmp=s6_nav-tn82" href="https://fantasyfootball.skysports.com?dcmp=s6_nav-tn82">
                <img class="product-image-large" src="../content/images/crossSaleProducts/fantasyfootball.png">
            </a>

            <a rel="external" class="product-item" data-app-name="skyvegas" data-app-link="http://m.skyvegas.com?dcmp=s6_nav-tn82" href="http://m.skyvegas.com?dcmp=s6_nav-tn82">
                <img class="product-image" src="../content/images/crossSaleProducts/skyvegas.png">
            </a>

            <a rel="external" class="product-item" href="http://www.skysports.com?dcmp=S6_Nav">
                <img class="product-image" src="../content/images/crossSaleProducts/skysports.png">
            </a>

            <a rel="external" class="js-app-link product-item" data-app-name="skycasino" data-app-link="https://www.skycasino.com/?dcmp=s6_nav-tn82" href="https://www.skycasino.com/?dcmp=s6_nav-tn82">
                <img class="product-image" src="../content/images/crossSaleProducts/skycasino.png">
            </a>

            <a rel="external" href="https://fantasysixaside.skysports.com?dcmp=s6_nav-tn82" class="product-item">
                <img class="product-image-large" src="../content/images/crossSaleProducts/sixaside.png">
            </a>

            <a rel="external" data-app-name="skyc4racingpick6" href="https://pick7.sportinglife.com?dcmp=s6_nav-tn82" class="product-item">
                <img class="product-image-large" src="../content/images/crossSaleProducts/pick7.png">
            </a>

            <a rel="external" class="product-item" data-app-name="dribble-uk" data-app-link="http://drbl.io/uLXS/BDLHApOGhF?dcmp=s6_nav-tn82" href="http://drbl.io/uLXS/BDLHApOGhF?dcmp=s6_nav-tn82">
                <img class="product-image-large" src="../content/images/crossSaleProducts/skybetdribble.svg">
            </a>

            <a rel="external" class="product-item" data-app-name="skypoker" data-app-link="https://m.skypoker.com?dcmp=s6_nav-tn82" href="https://m.skypoker.com?dcmp=s6_nav-tn82">
                <img class="product-image" src="../content/images/crossSaleProducts/skypoker.png">
            </a>

            <a rel="external" class="product-item" data-app-name="skybingo" data-app-link="https://www.skybingo.com/?dcmp=s6_nav-tn82" href="https://www.skybingo.com/?dcmp=s6_nav-tn82">
                <img class="product-image" src="../content/images/crossSaleProducts/skybingo.png">
            </a>

        </div>
    </div>
</div>
</div>
<div class="navbar navbar-inverse" id="navbar-upper" role="navigation">
<div class="container">
	<div class="navbar-header">
        <div class="navbar-header"><a class="navbar-brand" href="../index.php">Total Touchdown</a></div>
		</button>
	</div>

	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav pull-right">
			<?php if (isset($_COOKIE["username"])) {
    ?>
			<li><a href="../users/details.php">
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
