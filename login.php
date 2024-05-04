<?php
session_start();
?>

<?php
include 'config/database.php';
?>

<?php
if(isset($_POST["login"])){
	if(!empty($_POST["email"] && !empty($_POST["password"]))){
		$email = trim($_POST["email"]);
		$password = trim($_POST["password"]);
	
		$login = "SELECT * FROM users WHERE email='$email'";
		$loginq = $conn->query($login);
		if($loginq->num_rows > 0){
			$userdata = $loginq->fetch_assoc();
			if(password_verify($password, $userdata["password"])){
				$_SESSION['userdata'] = $userdata;
				if($email == 'admin@gmail.com' && $password == 'admin'){
					header("location: admin/index.php");
				}else{
					header("location: account.php");
				}		
			} else{
				echo 'incorrect password';
			}
		} else {
			echo 'email not found, please signup';
		}
	} else {
		echo 'please fill in all login fields';
	}
}

if(isset($_POST["signup"])){
if(!empty($_POST["name"]) && !empty($_POST["email"] && !empty($_POST["password"]))){
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$password = trim($_POST["password"]);
	$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
	
	$insert = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$hashedpassword')";
	$insertq = $conn->query($insert);
} else {
	echo 'please fill in all fields';
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
	<nav id="header">
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="./images/images (76).jpeg" alt="" style="height: 50px; width: 50px;"/></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
						
							</div>
							
							<div class="btn-group">
						
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	
	<section id="form">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
						<h2>Login to your account</h2>
						<form action="#" method="post">
							<input type="email" placeholder="Email" name="email" />
							<input type="password" placeholder="Password" name="password"/>
							<a href="" style="text-decoration: none;">forgot password?</a>
							<button class="btn btn-default" name="login">Login</button>
						</form>
					</div>
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form">
						<h2>New User Signup!</h2>
						<form action="#" method="post">
							<input type="text" placeholder="Name" name="name"/>
							<input type="email" placeholder="Email Address" name="email"/>
							<input type="password" placeholder="Password" name="password"/>
							<button class="btn btn-default" name="signup">Signup</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<footer class="header_top">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="contactinfo">
						<ul class="nav nav-pills">
							<li><a href="#"><i class="fa fa-phone"></i>07012847395</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i>turbinewasher@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="social-icons pull-right">
						<ul class="nav navbar-nav">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>	
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>