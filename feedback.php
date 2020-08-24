<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="feedback.css">
</head>
<body>

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
  			<a class="nav-link" href="booktrip.php" target="_self"><i class="fa fa-globe"></i>Book Trip</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="recenttravels.php" target="_self"><i class="fa fa-clock-o"></i>Recent Travels</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="about.php" target="_self"><i class="fa fa-info-circle"></i>About</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link active" href="feedback.php" target="_self"><i class="fa fa-envelope-o"></i>Feedback</a>
  		</li>
      <li class="nav-item">
        <a class="nav-link" href="home.html" target="_self"><i class="fa fa-sign-out"></i>Logout</a>
      </li>
    </ul>
	</div>
</nav>

<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "xplorers";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if (!$conn)
		echo "Connection Failed"."<br>";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$fullname = $_POST['fname'];
		$email = $_POST['emailSignUp'];
		$comment = $_POST['Comment'];

		$ins = "INSERT INTO feedback (FullName, Email, Comment) VALUES('".$fullname."', '".$email."', '".$comment."')";
		$result = $conn->query($ins);

		if ($result) {
			header('location: home.php');
		}
	}
?>

<!-- Feedback Form -->
<div class="container-fluid bg">
	<div class="row">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-4"></div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
			<form class="form-container" onsubmit="return validateForm();" action="feedback.php" method="POST" name="feedbackForm" <?php echo $_SERVER['PHP_SELF']; ?>>
				<h1 style="text-align: center;">FEEDBACK</h1>
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" name="fname" id="fullName" placeholder="Enter Full Name">
				</div>
				<div class="form-group">
					<label for="Email">E-mail</label>
					<input type="email" class="form-control" name="emailSignUp" id="Email" placeholder="Enter your Email ID">
				</div>
				<div class="form-group">
					<label for="addComment">Add A Comment</label>
					<input type="text" class="form-control" name="Comment" id="addComment" placeholder="Write about how you feel about our services">
				</div>
				<button type="submit" class="btn btn-dark btn-block">SUBMIT</button>
			</form>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-4"></div>
	</div>
	</div>

	<script type="text/javascript">
		function validateForm() {
			var a = document.forms["feedbackForm"]["fullName"].value;
			if (a == null || a == "") {
				alert("FULL NAME MUST BE FILLED OUT!!");
				return false;
			}

			var x = document.forms["feedbackForm"]["emailSignUp"].value;
			if (x == null || x == "") {
				alert("EMAIL MUST BE FILLED OUT!!");
				return false;
			}

			var c = document.forms["feedbackForm"]["Comment"].value;
			if (c == null || c == "") {
				alert("GIVE SOME FEEDBACK!!");
				return false;
			}
		}
	</script>
</nav>
</body>
</html>