<?php 
include("includes/db.php");

?>
<?php
		
					if(isset($_GET['pro_id'])){
					
					$product_id=$_GET['pro_id'];


					$gets_product = "delete from cart where p_id='$product_id'";
					
					$run_products= mysqli_query($conn , $gets_product);
			}
				?>
				<?php    
header('Location: cart_display.php');    
?>
