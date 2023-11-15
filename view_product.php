<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>

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
        </style>    
</head>
<body>
    <div id="main">
        <h1>ASSIGNMENT 4 - INVENTORY MANAGEMENT SYSTEM</h1>
      
        <a href="login.php">Logout |</a>
        <a href="add_product.php">Add Product |</a>
        <a href="view_product.php">View Product </a>
        <a href="members.php">Members </a>
        <br>
        <hr>

        <h2>View Products</h2>

            

                <?php
                             
		  require_once 'conn.php';




              
                  $query="SELECT * FROM `product table` ";

                $res = mysqli_query($conn, $query);

                if (mysqli_num_rows($res) > 0) 
                {
                    echo "<table id='products'>";
                    echo "<tr><th>Row #</th>";
                    echo "<th>Product Name</th>";
                    echo "<th>Product Price</th></tr>";
                    
                    $i = 1;     
                    while ($row = mysqli_fetch_assoc($res))                       
                    {
                        echo "<tr><td>$i</td>";
                        echo "<td>" . $row['productName'] . "</td>";
                        echo "<td>" . $row['productPrice'] . "</td></tr>";

                        $i++;
                    }
                    
                    echo "</table>";
                }
                else
                {
                    echo "<h3>The table is empty.</h3>";
                }
                ?>

       
    
    </div> 
</body>
</html>