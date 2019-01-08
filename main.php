<?php 
include("includes/db.php");

?>

<!DOCTYPE>

<html>
	<head>
	<title>My Hardware Store</title>
	
	<link rel="stylesheet" href="css/style.css" media="all" />
	
	</head>
	
	<body>
	
	<!--Main Container starts here-->
	
	<div class="main_wrapper">
	
	<!--Header Container starts here-->
	<div class="header_wrapper">   
	
		
		<img id="banner" src="images/ad_banner.jpg">

	</div>
	<!--Header ends here-->
	
	<!--Navigation starts here-->
	<div class="menubar">
	
		<ul id="menu">
			<li> <a href="main.php">Home</a></li>
			<li> <a href="main.php">All Product</a></li>
			<li> <a href="login.php">Admin</a></li>
			<li> <a href="registeration.php">Sign Up</a></li>
			<li> <a href="cart_display.php">Shopping Cart</a></li>
		
		</ul>
		
		
		
		
	</div>
	<!--Navigation ends here-->
	
	<!--Content starts here-->
	<div class="content_wrapper">
		
		<!--Sidebar starts here-->
		<div id="sidebar">
		
		<div id="sidebar_title">Product</div>
		
		<ul id="cats">
				
				<?php
				
					$gets_product = "select * from products";
					
					$run_cats = mysqli_query($conn , $gets_product);
					
					while($row_products=mysqli_fetch_array($run_cats)){
						
						$product_id = $row_products['product_id'];
						$product_title = $row_products['product_title'];
						echo "<li><a href='#'>$product_title</a></li>";
						
					}
				
				?>
				
		</ul>
		
		
		
		</div>
		
	
		<div id="content_area"> 

		
		
			
			<div id="product_box">

				<?php

				$gets_product = "select * from products";
					
					$run_cats = mysqli_query($conn , $gets_product);
					
					while($row_products=mysqli_fetch_array($run_cats)){
			$pro_id=$row_products['product_id'];
			$pro_name=$row_products['product_title'];
			$pro_desc=$row_products['product_desc'];
			$pro_img=$row_products['product_img'];
			$pro_price=$row_products['product_price'];
	
			
			
			echo "
				<div id='single_product'>
					<h3>$pro_name</h3>
					<img src='product_images/$pro_img' height='180' width='180'/>
					<h4>Price:&#8377; $pro_price</h4>
					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
					<a href='cart.php?add_cart=$pro_id'><button style='float:right'>Add To Cart</button></a>
				</div>
			
			";
				}
        
?>
			</div>
		</div>
		
		</div>
		
	
		<div id="footer">     

			<h2 style="text-align:center; padding-top:30px">&copy; 2016 by www.professionalcipher.blogspot.com </h2>



		</div>
	
	
	</div>
	
	<!--Main Container ends here-->
	
	</body>
	
</html>




		