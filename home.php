<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>XPLORERS HOME</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="home.css">
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
  			<a class="nav-link active" href="home.php"><i class="fa fa-home"></i>Home</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="booktrip.php" target="_self"><i class="fa fa-globe"></i>Book Trip</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="recenttravels.php" target="_self"><i class="fa fa-clock-o"></i>Recent Travels</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="about.php" target="_self"><i class="fa fa-info-circle"></i>About</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="feedback.php" target="_self"><i class="fa fa-envelope-o"></i>Feedback</a>
  		</li>
      <li class="nav-item">
        <a class="nav-link" href="home.html" target="_self"><i class="fa fa-sign-out"></i>Logout</a>
      </li>
    </ul>
	</div>
</nav>

<!-- Image Animation -->
<h3 id="text0">XPLORE THE WORLD WITH US</h3>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/london-eye.jpg" data-color="lightblue" alt="First Image">
      <div class="carousel-caption d-md-block">
        <h3 id="text1">THE LONDON EYE</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/lotus-temple.jpg" data-color="firebrick" alt="Second Image">
      <div class="carousel-caption d-md-block">
        <h3 id="text1">LOTUS TEMPLE</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/eiffel-tower.jpg" data-color="firebrick" alt="Second Image">
      <div class="carousel-caption d-md-block">
        <h3 id="text1">EIFFEL TOWER</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/disneyland.jpg" data-color="firebrick" alt="Second Image">
      <div class="carousel-caption d-md-block">
        <h3 id="text1">DISNEYLAND</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/charminar.jpg" data-color="firebrick" alt="Second Image">
      <div class="carousel-caption d-md-block">
        <h3 id="text1">CHAR-MINAR</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/sydney-opera-house.jpg" data-color="firebrick" alt="Second Image">
      <div class="carousel-caption d-md-block">
        <h3 id="text1">SYDNEY OPERA HOUSE</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/taj-mahal.jpg" data-color="violet" alt="Third Image">
      <div class="carousel-caption d-md-block">
        <h3 id="text1">TAJ MAHAL</h3>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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

<!-- Spinner Script -->
<script>
  $('.carousel').carousel({
    interval: 4000,
    pause: "false"
  });
</script>
</body>
</html>