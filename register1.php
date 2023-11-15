<?php
    ob_start();
    require_once 'conn.php';

    $username = $_REQUEST['UserName'];
  
    $hashed_password = password_hash($_REQUEST['PassWord'], PASSWORD_DEFAULT);

    $query = "Select username from product table where username = '$username';";
    $result = mysqli_query($conn, $query);


    if ($result > 0)
    {
        header('location:register.php?msg=userexists');
        ob_end_flush();
        die();
    }
    else
    {
        $query = "INSERT into `credentials` (username, `password`) VALUES ('$username','$hashed_password');";

        $result = mysqli_query($conn, $query);

        if ($result == 1)
        {
            header('location:register.php?msg=success');
        }
        else
        {
            header('location:register.php?msg=fail');
        }
    }

?>