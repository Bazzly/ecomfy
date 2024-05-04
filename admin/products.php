<?php
include '../config/session.php';
?>

<?php
include '../config/database.php';
?>

<?php
$x = "SELECT * FROM products";
$xq = $conn->query($x);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
   <h1>MASSAGE DEVICES</h1> 
   <table>
    <thead>
        <tr>
            <th>image</th>
            <th>name</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>
        <?php
    while($p = $xq->fetch_assoc()){
    ?>
        <tr>
            <td><img src="<?php echo '../uploads/'.$p['image']; ?>" alt="img"></td>
            <td><?php echo $p['name']; ?></td>
            <td><?php echo $p['price']; ?></td>
            <td><a href="">update</a></td>
            <td><a href="">delete</a></td>
        </tr>
        <?php
    }
        ?>
    </tbody>
   </table>
</body>
</html>