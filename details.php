<?php 
include("includes/db.php");

?>
<!DOCTYPE>

<html>
	<head>
	<title>My Online Shopping Website</title>
	
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
			<li> <a href="insert_product.php">Insert a Product</a></li>
			<li> <a href="#">My Account</a></li>
			<li> <a href="#">Sign Up</a></li>
			<li> <a href="#">Shopping Cart</a></li>
			<li> <a href="#">Contact Us</a></li>
		
		</ul>
		
		<div id="form">
		
		<form method="get" action="results.php" enctype="multipart/form-data">
			<input type="text" name="user_query" placeholder="Search a Product"/>
			<input type="submit" name="search" value="Search"/>
		</form>
		
		</div>
		
		
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


			<div id="shopping_cart">
			
			<span style="float:right; font-size:15px; padding:5px; line-height:40px;">
			
			Welcome <?php ?>! <b style="color:yellow">! <b style="color:yellow">Shopping Cart-</b>Total Item-<?php
			$sql="SELECT p_id FROM cart";
if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

			?> 
			
			
			Total Price- <?php 
			$total=0;
			
						$cart_products = "select * from cart";
				$run_carts = mysqli_query($conn , $cart_products);
				while($row_products=mysqli_fetch_array($run_carts)){
			$pr_id=$row_products['p_id'];
			
				$gets_product = "select * from products where product_id='$pr_id'";
					
					$run_products= mysqli_query($conn , $gets_product);
				
				while($row_products=mysqli_fetch_array($run_products)){
			
			$pro_price=array($row_products['product_price']);
			$values =array_sum($pro_price);
			$total +=$values;
			
			
				}
				}
			echo "
					$total
			
			";
			?>
			
			
			
			
			<a href="cart_display.php">Go To Cart</a>
			
			
			</span>
			
			
			</div>

		<div id="product_box">


				<?php
				
				if(isset($_GET['pro_id'])){
					
					$product_id=$_GET['pro_id'];

					$gets_product = "select * from products where product_id='$product_id'";
					
					$run_products= mysqli_query($conn , $gets_product);
				
				while($row_products=mysqli_fetch_array($run_products)){
			$pro_id=$row_products['product_id'];
			$pro_name=$row_products['product_title'];
			$pro_desc=$row_products['product_desc'];
			$pro_img=$row_products['product_img'];
			$pro_price=$row_products['product_price'];
	
			
				
			
			echo "$
				<div id='single_product'>
					<h3>$pro_name</h3>
					<img src='product_images/$pro_img' height='180' width='180'/>
					<h4>Price: &#8377; $pro_price</h4>
					<h5>$pro_desc</h5>
					<a href='main.php' style='float:left;'>Go Back</a>
					<a href='cart.php?add_cart=$pro_id'><button style='float:right'>Add To Cart</button></a>
				</div>
			
			";
				}
            
        
    }
    
				
?>
			
		</div>
		
		</div>
		
	
		<div id="footer">     

			<h2 style="text-align:center; padding-top:30px">&copy; 2016 by www.professionalcipher.blogspot.com </h2>


		</div>
	
	</div>
	</div>
	
	<!--Main Container ends here-->
	
	</body>
	
</html>




		