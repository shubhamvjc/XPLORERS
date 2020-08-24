<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="about.css">
</head>
<body background="img/bg1.jpg">
<!-- Header -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
	
	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="collapse_target">
    <a class="navbar-brand" href="#"><img src="img/logo.png" width="60" height="60"/>XPLORERS&nbsp;Welcome, 
    <?php
    echo $_SESSION["usrname"];
    ?>
	</a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
  			<a class="nav-link" href="home.php"><i class="fa fa-home"></i>Home</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="booktrip.php" target="_self"><i class="fa fa-globe"></i>Book Trip</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="recenttravels.php" target="_self"><i class="fa fa-clock-o"></i>Recent Travels</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link active" href="about.php" target="_self"><i class="fa fa-info-circle"></i>About</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="feedback.php" target="_self"><i class="fa fa-envelope-o"></i>Feedback</a>
  		</li>
      <li class="nav-item">
        <a class="nav-link" href="home.php" target="_self"><i class="fa fa-sign-out"></i>Logout</a>
      </li>
    </ul>
	</div>
</nav>
<!-- Main Content -->
<div class="container">
	<div id="heading" class="row">
		<div class="col-lg-3">
			<h2>ABOUT US<h2>
			<h5>This is what we are.<h5>
		</div>
		<div class="col-lg-9">
			<p>
			The Xplorers is a travel company which is specialized in Family Packages & Customize Tours all over India and International Places. We explore the destination you select which is well planned ​and sticks to the pre-set itinerary. 
			The Xplorers is one of the finest company to serve you with the best itinerary and with the best facilities.
			<p>
		</div>
	</div>

	<div id="work" class="row">
		<div class="col-lg-12">
			<h2>OUR WORK PROCESS<h2>
		</div>
		<div class="row">
			<div class="col-lg-1"></div>
				<div id="process" class="col-lg-5">
					<h4>EXPLORE<h4>
					<p>
					Travel is the movement of people between relatively distant geographical locations, and can be one way or round trip. 
					Travel can also include relatively short stays between successive movements.
					<p>
				</div>

			<div id="process" class="col-lg-5">
				<h4>MISSION<h4>
				<p>
				We will help you plan an unforgettable, one-of-a-kind trip. 
				There is a Native American saying that goes, "Tell me, and I'll forget. Show me, and I may not remember. Involve me, and I'll understand."
				<p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-1"></div>
				<div id="process" class="col-lg-5">
					<h4>DEVELOP<h4>
					<p>
					We aim to provide customized, luxurious travel packages that never disappoint.
					We believe travel broadens the mind and gives each of us a different perspective on life.
					Get out and experience the world! Travel enriches your life!
					<p>
				</div>

				<div id="process" class="col-lg-5">
					<h4>DELIVER<h4>
					<p>
					We explore the destination you select with the well planned domestic & international trips which sticks to the pre-set itinerary.
					When you visit a unique destination and Culture, you'll become more open to various ways of life!<br><br>
					<p>
				</div>
			</div>
		</div>
	</div>
<!-- Footer -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
<!-- Collapsing Button -->  
  <button class="navbar-toggler" data-toggle="collapse" data-target="#collapseTarget">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse footer" id="collapseTarget">
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="feedback.html"><h6 style="color: black;">SEND FEEDBACK FOR REVIEWS AND UPCOMING TRIPS.</h6></a>
      </li>
    </ul>
  </div>
</nav>

</body>
</html>