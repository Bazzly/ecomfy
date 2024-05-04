<?php
include 'config/database.php';
?>

<?php
$id = $_GET["id"];
$delete = "DELETE FROM `add-to-cart` WHERE id=$id";
$deletequery = $conn->query($delete);
if($deletequery == TRUE){
    echo 'item deleted from cart';
    header("location: cart.php");
}