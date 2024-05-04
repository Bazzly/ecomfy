<?php
$severname = 'localhost';
$dbusername = 'root';
$password = '';
$dbname = 'turbinewasher';

$conn = new mysqli($severname, $dbusername, $password, $dbname);
if($conn->connect_error){
    die('error'.$conn->connect_error);
}

?>