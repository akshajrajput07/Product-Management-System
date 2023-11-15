<?php

    require_once 'check_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
    <style>
            #main
            {
                width:70%;
                margin:auto;
            }
        </style>
</head>
<body>
<div id="main">
    <h1>ASSIGNMENT 4 - INVENTORY MANAGEMENT SYSTEM</h1>
 
        <a href="login.php">Logout |</a>
        <a href="add_product.php">Add Product |</a>
        <a href="view_product.php">View Product </a>
        <br>
        <hr>

            <h2>Welcome </h2>

            <p>This is a secure member's page. It can only be accessed once the user has logged in.</p>

            <form action="login.php" method="post">
                <input type="submit" value="Logout">
            </form>
        </div>
</body>
</html>