<?php
ob_start();

session_start();
require_once 'conn.php';

$username = $_REQUEST['UserName'];
$password = $_REQUEST['PassWord'];

$query = "SELECT * from credentials where username = '$username'";

$res = mysqli_query($conn,$query);


if ($res == 1)
{
    $row = mysqli_fetch_assoc($res);     
    $hashed_password = $row['PassWord'];   

    if (password_verify($password, $hashed_password))
    {
        $_SESSION['UserName'] = $username;

        header('location: members.php');
        ob_end_flush();
        die();
    }
}

header('location:login.php?result=fail');

?>