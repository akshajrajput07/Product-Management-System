<?php 
$host='localhost';

$user = 'root';
$pswd = '';
$dbName = 'assignment4';
 $conn = mysqli_connect($host, $user, $pswd, $dbName);

 if(empty($conn))
 {
    die("connection Failed".mysqli_connect_error());
 }
 else{
    echo"connection established";
 }
?>