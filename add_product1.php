<?php

$productName= $_REQUEST['productName'];
$productPrice= $_REQUEST['productPrice'];

require_once 'conn.php';

$query = "INSERT into `product table` (`Product Name`, Price) VALUES ('$productName','$productPrice'));";
	
	$result = mysqli_query($conn, $query);
	
	if ($result > 0)
		header("Location:add_product1.php?result=success");
	else
		header("Location:add_product1.php?result=fail");

?>