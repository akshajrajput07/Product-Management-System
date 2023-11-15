<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    
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
                width: 50%;
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
                width:50%;
                margin:auto;
            }
    </style>
</head>
<body>
    <div id="main">
        <h1>ASSIGNMENT 4 - INVENTORY MANAGEMENT SYSTEM</h1>
  
        <a href="login.php">Logout |</a>
        <a href="add_product.php">Add Product |</a>
        <a href="view_product.php">View Product |</a>
        <a href="members.php">Members </a>
        <br>
        <hr>

        <h2>Add Product</h2>

            <form action="add_product1.php" method="post">
                <table>
                    <tr>
                        <td>Product Name:</td>
                        <td>
                            <input type="text" name="productName">
                        </td>
                    </tr>
                    <tr>
                        <td>Product Price:</td>
                        <td>
                            <input type="text" name="productPrice">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Add Product">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
            if(isset($_REQUEST['msg']))
            {
               if( $_REQUEST['msg']=='success')
               {
                echo "Product Added";
               }
               elseif ($_REQUEST['msg']=='fail') 
               {
                echo "Product not added";             
               }
            }
            ?>
       
    
    </div>    
</body>
</html>