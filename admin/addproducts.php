<?php
session_start();
$sess = $_SESSION['userdata']['name'];
if(!isset($sess)){
	header("location: login.php");
} 
?>

<?php
include '../config/database.php';
?>

<?php
if(isset($_POST["massage"])){
    $image = $_FILES["image"]["name"];
    $price = trim($_POST["price"]);
    $name = trim($_POST["name"]);

$insert = "INSERT INTO products(image, name, price) VALUES('$image', '$name', '$price')";
$insertquery = $conn->query($insert);

if($insertquery == TRUE){
move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_FILES["image"]["name"]);
}
}

if(isset($_POST["homecomfort"])){
    $image = $_FILES["image"]["name"];
    $price = trim($_POST["price"]);
    $name = trim($_POST["name"]);

$insert = "INSERT INTO `home-comfort-devices`(`image`, `name`, `price`) VALUES ('$image', '$name', '$price')";
$insertquery = $conn->query($insert);

if($insertquery == TRUE){
move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_FILES["image"]["name"]);
}
}

if(isset($_POST["kitchendevices"])){
    $image = $_FILES["image"]["name"];
    $price = trim($_POST["price"]);
    $name = trim($_POST["name"]);

$insert = "INSERT INTO `kitchendevices`(`image`, `name`, `price`) VALUES ('$image','$name','$price')";
$insertquery = $conn->query($insert);

if($insertquery == TRUE){
move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_FILES["image"]["name"]);
}
}

if(isset($_POST["interiordecorations"])){
    $image = $_FILES["image"]["name"];
    $price = trim($_POST["price"]);
    $name = trim($_POST["name"]);

$insert = "INSERT INTO `interiordecorations`(`image`, `name`, `price`) VALUES ('$image','$name','$price')";
$insertquery = $conn->query($insert);

if($insertquery == TRUE){
move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/".$_FILES["image"]["name"]);
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
    <title>admin dashboard</title>
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
</head>

<body>

<h1>upload products to massage devices</h1>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file"  name="image" placeholder="product image">
    <input type="text" name="price" placeholder="product price">
    <input type="text" name="name" placeholder="product name">
    <button name="massage">submit</button>
</form> <br> <br>

<h1>upload products to home comfort</h1>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file"  name="image" placeholder="product image">
    <input type="text" name="price" placeholder="product price">
    <input type="text" name="name" placeholder="product name">
    <button name="homecomfort">submit</button>
</form> <br> <br>

<h1>upload products to kitchen devices</h1>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file"  name="image" placeholder="product image">
    <input type="text" name="price" placeholder="product price">
    <input type="text" name="name" placeholder="product name">
    <button name="kitchendevices">submit</button>
</form> <br> <br>

<h1>upload products to interior decorations</h1>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file"  name="image" placeholder="product image">
    <input type="text" name="price" placeholder="product price">
    <input type="text" name="name" placeholder="product name">
    <button name="interiordecorations">submit</button>
</form>

<a href="./index.php" style="text-decoration: none; display:flex; justify-content: center; margin-top: 4%">Go To Admin Dashboard</a>
</body>
</html>