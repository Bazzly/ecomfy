<?php
include '../config/session.php';
?>

<?php
include '../config/database.php';
?>

<?php
$x = "SELECT * FROM users";
$xq = $conn->query($x);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>S/N</th>
            <th>Username</th>
            <th>Email</th>
            <th>Delete User</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $k = 1;
while($u = $xq->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $k++; ?></td>
    <td><?php echo $u['name']; ?></td>
    <td><?php echo $u['email']; ?></td>
    <td><a href="#">delete</a></td>
    </tr>
  
    <?php
}
            ?>
        </tbody>
    </table>
</body>
</html>