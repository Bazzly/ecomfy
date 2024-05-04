<?php
include 'config/database.php';
// error_reporting(0);
?>

<?php
if(isset($_POST["updatecart"])){
	$quantity = trim($_POST["cartquantity"]);
	$updateid = $_POST['cart_id'];
$updatecartquantity = "UPDATE `add-to-cart` SET `quantity`=$quantity WHERE id=$updateid";
$updatecartquantityq = $conn->query($updatecartquantity);
}
?>

<?php
$grandtotal = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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
    <!-- <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png"> -->
	<style>
			@media screen and (max-width: 770px) {
				td > img{
				width: 10px;
				}
				form > input {
					display: block;
					margin: 0 auto;
				}	
				form > button {
					display: block;		
			}
				.cart_delete > i {
					width: 3%;
}
				.name > span {
				display: none;
			}
			.delete{
				display: none;
			}
		
		}
	</style>
</head>

<body>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>	

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed ">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td class="total delete">Delete</td>
						</tr>
					</thead>
					<tbody>
						<?php
						$x = "SELECT * FROM `add-to-cart`";
						$xquery = $conn->query($x);
						if ($xquery->num_rows > 0){
							while($xdata = $xquery->fetch_assoc()){
								?>
								<tr>
								<td class="name">
								<img src="<?php echo $xdata["image"]; ?>" alt="" style="height: 65px; width: 65px"> <span><?php echo $xdata['name']?></span>
								</td>
								<td class="cart_price">
									<p><?php echo $xdata["price"]; ?></p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<form action="" method="post">
										<input type="hidden" name="cart_id" value="<?php echo $xdata['id']; ?>" style="">
										<input class="cart_quantity_input" type="number" min="1" name="cartquantity" value="<?php echo$xdata["quantity"]; ?>" style="width: 59%;">
										<button name="updatecart">update</button>
										</form>
									</div>
								</td>
								<td class="cart_price">
									<p class="cart_total_price"><?php echo $sub_total = ($xdata['price'] * $xdata['quantity']); ?></p>
								</td>
								<td class="">
									<a class="" href="deletecartitem.php?id=<?php echo $xdata["id"];?>"><i class="fa fa-times"></i></a>
								</td>	

										<?php 									
										$grandtotal += $sub_total;
										 	?>	
							</tr>
						
							<?php
						
							} 
						}else{
							echo "cart is empty";
						}
						?>
      <tr class="table-bottom" style="background-color: #FE980F; color: white">
         <td colspan="3" style="text-align: center;">Grand total</td>
         <td class="cart_price"><p class="cart_total_price" style="color: white;"><?php echo $grandtotal; ?></p></td>
         <td><a href="deleteall.php"  onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($grandtotal > 1)?'':'disabled'; ?>"><i class="fa fa-times" style=" "></i></a></td>
      </tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<button style="display: flex; justify-content: center; background-color: #FE980F; margin: 0 auto; border: none"><a href="account.php" style="text-decoration: none; color: white; padding: 8px">checkout</a></button>


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
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>