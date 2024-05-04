<?php
include 'config/database.php';
?>

<?php
if(isset($_POST['add-to-cart'])){
$name = $_POST["name"];
$image = $_POST["image"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];

$check = "SELECT * FROM `add-to-cart` WHERE name='$name' AND image='$image'";
$checkq = $conn->query($check);
if($checkq->num_rows > 0){
echo "<script> alert('product is already in your cart'); </script>";
} else{
$insert = "INSERT INTO `add-to-cart`(`name`, `image`, `price` , `quantity`) VALUES ('$name','$image','$price', '$quantity')";
$insertq = $conn->query($insert);

if($insertq == TRUE){
	echo "<script> alert('added to cart'); </script>";
} else{
	echo 'not inserted';
}
}
}
?>

<?php
$search = "";
if(isset($_POST["search"])){
 $search = trim($_POST["searchtext"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>homepage</title>
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
	<link rel="stylesheet" href="cartresponsive.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<style>
			@media screen and (max-width: 750px){
				.shoppingicons{	
			font-size: x-large !important;
			}
			
			.icontext{
				font-size: medium;
			}
		}

	</style>
</head>

<body style="padding: 0px; margin: 0px;">
	<nav id="header">
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="./images/E_20240414_170904_0000-transformed.png" alt="" style="height: 57px; width: 57px;"/></a>
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
								<li><a href="./cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="./account.php"><i class="fa fa-user"></i> Account</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
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
								<li><a href="./index.php" class="active">Home</a></li>
								<li><a href="./contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<form action="" method="post">
							<input type="text" placeholder="Search product name" name="searchtext"/>
							<button name="search">search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	
	<header id="slider">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>COMFY</h1>
									<h2>Massaging Devices</h2>
									<p>Relaxation at your fingertips. With a massaging device, unwind after a long day, soothe sore muscles, and melt away stress </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="./images/20-Speed-Massager-Gun-4-UPDATED__42249__28154__12432.jpg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>COMFY</h1>
									<h2>Home Comfort Devices</h2>
									<p>Transform your space into a sanctuary and unwind after a long day with the touch of a button. Invest in your well-being and create a cozy atmosphere at home.</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="./images/images (84).jpeg
									" class="girl img-responsive" alt="" />
								</div>
							</div>
					
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>COMFY</h1>
									<h2>Kitchen Appliances</h2>
									<p>Upgrade your culinary experience with our kitchen devices. Effortlessly prepare delicious meals, save time, and unleash your inner chef!</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="./images/images (85).jpeg" class="girl img-responsive" alt="" />
									
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>COMFY</h1>
									<h2>Interior Decorations</h2>
									<p>Transform your space effortlessly with our interior decoration home items. Elevate your home's style and create a space that reflects your personality. Shop now to bring new life to your living space!</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="./images/images (86).jpeg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</header>

	<div style="width:50%; margin: 0 auto; margin-top: 10%">
<h2 class="shoppingicons" style="font-weight: heavy; font-size: 40px; margin-bottom: 4%; text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Shopping made easy with 3 simple steps</h2>
<div style="display: flex; flex-direction: row; justify-content: center; text-align: center">
<div style="margin: 13px; background-color: whitesmoke; font-size: 23px">
	<center><i><span class="material-symbols-outlined">shopping_cart</span></i></center>
<p class="icontext">add items to cart</p> 
</div>
<div style="margin: 13px; background-color: whitesmoke; font-size: 23px">
	<center><i><span class="material-symbols-outlined">payments</span></i></center>
<p class="icontext">make payment</p>
</div>
<div style="margin: 13px; background-color: whitesmoke; font-size: 23px">
	<center><i><span class="material-symbols-outlined">local_shipping</span></i></center>
<p class="icontext">door-step delivery</p>
</div>
</div>
	</div>

	<main style="margin-top: 10%;">

		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h1 class="fs-small" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">ABOUT E-COMFY BRAND</h1>
					<p>E-comfort is an online brand that is dedicated to bringing comfort and joy to your home. With our curated selections of home comfort devices, we strive to create spaces where you can relax, unwind, and thrive. <br> <br> Discover the perfect blend of style and functionality for your sanctuary. Welcome to comfort redefined.</p>
				</div>			
				<div class="col-sm-9 padding-right">	
					<div class="category-tab">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#massagingdevice" data-toggle="tab">Massaging Devices</a></li>
								<li><a href="#homecomfortdevice" data-toggle="tab">Home Comfort Devices</a></li>
								<li><a href="#kitchendevices" data-toggle="tab">Kitchen Devices</a></li>
								<li><a href="#interiordecor" data-toggle="tab">Interior Decorations</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="massagingdevice" >
								<?php
						$data = "SELECT * FROM products WHERE name LIKE '%$search%'";
						$dataquery = $conn->query($data);
						if($dataquery->num_rows > 0){
							while ($x = $dataquery->fetch_assoc()){
								?>
								<form class="col-sm-4" method="post" action="#" enctype="multipart/form-data" >
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo 'uploads/'.$x['image']; ?>" alt=""/>
											<h2><?php echo $x["price"]; ?></h2>
											<p><?php echo $x["name"]; ?></p>
											<a href="#" class="btn btn-default add-to-cart"><button name="add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></a>
										<input type="hidden" value="<?php echo $x["name"]; ?>" name="name">
										<input type="hidden" value="<?php echo 'uploads/'.$x['image']; ?>" name="image">
										<input type="hidden" value="<?php echo $x["price"]; ?>" name="price">
										<input type="hidden" value="1" name="quantity">
										</div>
										
									</div>
								</div>
							</form>
							<?php
							}
						}
								?>
							</div>
							
							<div class="tab-pane fade" id="homecomfortdevice" >
					<!-- <h1 class="fw-bold text-center">homecomfortdevice coming soon</h1>	-->
					<?php
						$data = "SELECT * FROM `home-comfort-devices` WHERE name LIKE '%$search%'";
						$dataquery = $conn->query($data);
						if($dataquery->num_rows > 0){
							while ($x = $dataquery->fetch_assoc()){
								?>
								<form class="col-sm-4" method="post" action="#" enctype="multipart/form-data" >
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo 'uploads/'.$x['image']; ?>" alt=""/>
											<h2><?php echo $x["price"]; ?></h2>
											<p><?php echo $x["name"]; ?></p>
											<a href="#" class="btn btn-default add-to-cart"><button name="add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></a>
										<input type="hidden" value="<?php echo $x["name"]; ?>" name="name">
										<input type="hidden" value="<?php echo 'uploads/'.$x['image']; ?>" name="image">
										<input type="hidden" value="<?php echo $x["price"]; ?>" name="price">
										<input type="hidden" value="1" name="quantity">
										</div>
										
									</div>
								</div>
							</form>
							<?php
							}
						}
								?>
							</div>

							<div class="tab-pane fade" id="kitchendevices" >
					<!-- <h1 class="fw-bold text-center">kitchendevices coming soon</h1> -->
					<?php
						$data = "SELECT * FROM kitchendevices WHERE name LIKE '%$search%'";
						$dataquery = $conn->query($data);
						if($dataquery->num_rows > 0){
							while ($x = $dataquery->fetch_assoc()){
								?>
								<form class="col-sm-4" method="post" action="#" enctype="multipart/form-data" >
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo 'uploads/'.$x['image']; ?>" alt=""/>
											<h2><?php echo $x["price"]; ?></h2>
											<p><?php echo $x["name"]; ?></p>
											<a href="#" class="btn btn-default add-to-cart"><button name="add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></a>
										<input type="hidden" value="<?php echo $x["name"]; ?>" name="name">
										<input type="hidden" value="<?php echo 'uploads/'.$x['image']; ?>" name="image">
										<input type="hidden" value="<?php echo $x["price"]; ?>" name="price">
										<input type="hidden" value="1" name="quantity">
										</div>
										
									</div>
								</div>
							</form>
							<?php
							}
						}
								?>
							</div>
							<div class="tab-pane fade" id="interiordecor" >
					<!-- <h1 class="fw-bold text-center">interiordecor coming soon</h1> -->
					<?php
						$data = "SELECT * FROM interiordecorations WHERE name LIKE '%$search%'";
						$dataquery = $conn->query($data);
						if($dataquery->num_rows > 0){
							while ($x = $dataquery->fetch_assoc()){
								?>
								<form class="col-sm-4" method="post" action="#" enctype="multipart/form-data" >
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo 'uploads/'.$x['image']; ?>" alt=""/>
											<h2><?php echo $x["price"]; ?></h2>
											<p><?php echo $x["name"]; ?></p>
											<a href="#" class="btn btn-default add-to-cart"><button name="add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button></a>
										<input type="hidden" value="<?php echo $x["name"]; ?>" name="name">
										<input type="hidden" value="<?php echo 'uploads/'.$x['image']; ?>" name="image">
										<input type="hidden" value="<?php echo $x["price"]; ?>" name="price">
										<input type="hidden" value="1" name="quantity">
										</div>
										
									</div>
								</div>
							</form>
							<?php
							}
						}
								?>
							</div>
						</div>
					</div>
					</div>		
			</div>
		</div>
	</main>

	<section style="margin-top: 10%;">
<h1 style="text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">REAL CUSTOMER'S REVIEW</h1>
<div>
<marquee behavior="" direction="">
<img src="./images/20-Speed-Massager-Gun-4-UPDATED__42249__28154__12432.jpg" alt="" style="height: 50px; width: 50px; border-radius: 50%;">
<p>I was skeptical about the impact of comfort devices on my home until I tried the products from e-comfy. <br> Now, I can't imagine my life without them! Highly recommended!</p>
</marquee>

<marquee behavior="" direction="">
<img src="./images/20-Speed-Massager-Gun-4-UPDATED__42249__28154__12432.jpg" alt="" style="height: 50px; width: 50px; border-radius: 50%;">
<p>Their commitment to creating a comfortable home environment is evident in every product. <br> I'm grateful to have found such a reliable partner in enhancing my daily comfort.</p>
</marquee>

<marquee behavior="" direction="">
<img src="./images/20-Speed-Massager-Gun-4-UPDATED__42249__28154__12432.jpg" alt="" style="height: 50px; width: 50px; border-radius: 50%;">
<p>Their range of comfort devices has made my evenings more enjoyable and my mornings more rejuvenating.  <br>Thank you for bringing comfort and peace into my home!</p>
</marquee>
</div>
	</section>

	<footer class="header_top" style="margin-top: 10%; background-color: #FE980F; color: white">
		<div class="container">
			<h1 style="text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> E-COMFY</h1>
			<p style="text-align: center;"></p>
			<div class="row">
				<div class="col-sm-6">
					<div class="contactinfo">
						<ul class="nav nav-pills">
							<li><a href="#"><i class="fa fa-phone"></i>&nbsp;07012847395</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i>&nbsp;ecomfy@gmail.com</a></li>
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
		<div style="background-color: #FE980F;">
				<p style="text-align: center;">&copy;<?php echo date("Y");?>&nbsp;E-COMFY</p>
			</div>
	</footer>	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>