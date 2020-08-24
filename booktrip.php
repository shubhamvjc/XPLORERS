<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>BOOK TRIP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<link rel="stylesheet" type="text/css" href="booktrip.css">
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
  			<a class="nav-link" href="home.php" target="_self"><i class="fa fa-home"></i>Home</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link active" href="booktrip.php" target="_self"><i class="fa fa-globe"></i>Book Trip</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="recenttravels.php" target="_self"><i class="fa fa-clock-o"></i>Recent Travels</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="about.php" target="_self"><i class="fa fa-info-circle"></i>About</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="feedback.html" target="_self"><i class="fa fa-envelope-o"></i>Feedback</a>
  		</li>
      <li class="nav-item">
        <a class="nav-link" href="index.html" target="_self"><i class="fa fa-sign-out"></i>Logout</a>
      </li>
    </ul>
	</div>
</nav>

<!-- Image Gallery -->
<h3 id="text2">BOOK YOUR FIRST TRIP</h3>
<div class="container-fluid">
  <div class="d-flex flex-row flex-wrap justify-content-center">
    <div class="d-flex flex-column">
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <img src="img/dubai.jpg" class="img-fluid card-img-top">
            <div class="card-body">
              <h4 class="card-title">DUBAI</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="card-footer">
              <a href="http://bit.do/ez5s5" target="_blank" class="card-link">Xplore</a>
            </div>  
        </div>
        </div>
      </div>
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <img src="img/thailand.jpeg" class="img-fluid card-img-top">
            <div class="card-body">
              <h4 class="card-title">THAILAND</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>                        
            </div>
            <div class="card-footer">
              <a href="http://bit.do/ez5tA" target="_blank" class="card-link">Xplore</a>
            </div>  
        </div>
      </div>
      </div>
    </div>
              
    <div class="d-flex flex-column">
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <img src="img/italy.jpg" class="img-fluid card-img-top">
            <div class="card-body">
              <h4 class="card-title">ITALY</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="card-footer">
              <a href="http://bit.do/ez5ur" target="_blank" class="card-link">Xplore</a>
            </div>  
        </div>
        </div>
      </div>
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <img src="img/south-africa.jpg" class="img-fluid card-img-top">
            <div class="card-body">
              <h4 class="card-title">SOUTH AFRICA</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="card-footer">
              <a href="http://bit.do/ez5Re" target="_blank" class="card-link">Xplore</a>
            </div>  
        </div>
      </div>
      </div>
    </div>
              
    <div class="d-flex flex-column">
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <img src="img/leh-ladakh.jpeg" class="img-fluid card-img-top">
            <div class="card-body">
              <h4 class="card-title">LEH LADHAK</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="card-footer">
              <a href="http://bit.do/ez5Rq" target="_blank" class="card-link">Xplore</a>
            </div>  
        </div>
        </div>
      </div>
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <img src="img/spain.jpg"  class="img-fluid card-img-top">
            <div class="card-body">
              <h4 class="card-title">SPAIN</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <div class="card-footer">
              <a href="http://bit.do/ez5RA" target="_blank" class="card-link">Xplore</a>
            </div>  
        </div>
      </div>
      </div>
    </div>
              
    <div class="d-flex flex-column">
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <img src="img/kerela.jpg" class="img-fluid card-img-top">
            <div class="card-body">
              <h4 class="card-title">KERELA</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="card-footer">
              <a href="http://bit.do/ez5RG" target="_blank" class="card-link">Xplore</a>
            </div>  
        </div>
      </div>
      </div>
      <div data-aos="zoom-in-down">
      <div class="card">
        <div class="card-img">
          <img src="img/nepal.jpg" class="img-fluid card-img-top">
            <div class="card-body">
              <h4 class="card-title">NEPAL</h4>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="card-footer">
              <a href="http://bit.do/ez5RX" target="_blank" class="card-link">Xplore</a>
            </div>  
        </div>
      </div>
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

<script type="text/javascript">
  AOS.init();
</script>
</body>
</html>
