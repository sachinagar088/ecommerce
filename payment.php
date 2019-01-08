<?php 
include("includes/db.php");


$cart_products = " truncate table cart ";
$run_carts = mysqli_query($conn , $cart_products);

header('Location: main.php'); 

?>