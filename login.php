<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        #main
            {
            margin: 10px 30px;
            width: 75%;
            }

            table, td, th
            {    
                border: 1px solid #ddd;
                text-align: left;
            }

            table
            {
                border-collapse: collapse;
                width: 40%;
                margin: auto;
            }

            th, td
            {
                padding: 15px;
            }

            h2
            {
                text-align: center;
            }   

            #msg
            {
                width:40%;
                margin:auto;
            }
        </style>     
</head>
<body>
    <div id="main">
        <h1>ASSIGNMENT 4 - INVENTORY MANAGEMENT SYSTEM</h1>
        <a href="home.php">Home |</a>
        <a href="register.php">Register |</a>
        <a href="members.php">Members </a>
       
        <br>
        <hr>

        <h2>Login</h2>

            <form action="login1.php" method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input type="text" name="UserName" required autofocus>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="text" name="PassWord" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Login">
                        </td>
                    </tr>
                </table>
            </form>
            <?php
                if (isset($_REQUEST['msg']))
                {
                    if ($_REQUEST['msg'] == "fail")
                    {
                        echo "<br><div id='msg'>";
                        echo "<div class='alert alert-danger alert-dismissable fade in'>";
                        echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                       
                        echo "<strong>Login failed!</strong> Either username or password is incorrect. Please try again.";
                        echo "</div></div>";
                    }
                }
            ?>
    
    </div> 
</body>
</html>