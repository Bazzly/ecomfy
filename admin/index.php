<?php
include '../config/session.php';
?>

<?php
include '../config/database.php';
?>


<?php
  $sql="SELECT * from users";
  $result=$conn-> query($sql);
  $count=0;
  if ($result-> num_rows > 0){
      while ($row=$result-> fetch_assoc()) {

          $count=$count+1;
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <style>
        .container > div {
            background-color: #FE980F; 
            border: 3px solid black; 
            width:20%; 
            box-shadow: 2px 2px black;
            border-radius: 9px;
            text-align: center;
        }
    </style>
</head>
<body>
<!-- nav -->
<!-- sidebar -->
<div class="container" style="display: flex; flex-direction: row; justify-content: space-evenly">
    <div>
        <p>Total Registered Users</p>
        <p><?php echo $count; ?></p>
    </div>

    <div>
        <p>Current Orders</p>
        <?php
  $sql="SELECT * from  orders";
  $result=$conn-> query($sql);
  $count=0;
  if ($result-> num_rows > 0){
      while ($row=$result-> fetch_assoc()) {

          $count=$count+1;
      }
  } else echo "no orders!";
  ?>
        <p>?</p>
    </div>

    <div>
        <p>Completed Orders</p>   
<?php
  $sql="SELECT * from  orders WHERE order_status=1";
  $result=$conn-> query($sql);
  $count=0;
  if ($result-> num_rows > 0){
      while ($row=$result-> fetch_assoc()) {

          $count=$count+1;
      }
  } else echo "no completed order!";
  ?>
        <p>?</p>
    </div>
    <div>
        <p>Total Revenue made</p>
        <!-- sum the revenue column in the db containing completed payments -->
        <p>?</p>
    </div>
</div>
<a href="../index.php" style="text-decoration: none; display:flex; justify-content: center; margin-top: 5%">Go To Homepage</a>
<a href="./orders.php" style="text-decoration: none; display:flex; justify-content: center; margin-top: 5%">Orders</a>
<a href="./addproducts.php" style="text-decoration: none; display:flex; justify-content: center; margin-top: 5%">Add New Products</a>
<a href="./products.php" style="text-decoration: none; display:flex; justify-content: center; margin-top: 5%">Products</a>
<a href="./registeredcustomers.php" style="text-decoration: none; display:flex; justify-content: center; margin-top: 5%">Registered Customers</a>
<a href="./revenue.php" style="text-decoration: none; display:flex; justify-content: center; margin-top: 5%">Revenue Information</a>
</body>
</html>

<!-- orderid
userid
deliveredto
phoneto
deliveryaddress
paymentmethod
paymentstatus
orderstatus
orderdate -->