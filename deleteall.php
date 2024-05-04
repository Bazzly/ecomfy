<?php
include 'config/database.php';
?>

<?php
$deleteall = "DELETE FROM `add-to-cart`";
$deleteallq = $conn->query($deleteall);
if($deleteallq == TRUE){
    header("location: cart.php");
}
?>