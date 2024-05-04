<?php
include '../config/session.php';
?>

<?php
include '../config/database.php';
?>


<?php
  $sql="SELECT * from  orders";
  $result=$conn-> query($sql);
  $count=0;
  if ($result-> num_rows > 0){
      while ($row=$result-> fetch_assoc()) {

          $count=$count+1;
      }
  }
?>