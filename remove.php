<?php 
include("includes/db.php");

?>
<?php
		
					
					if(isset($_POST["pro_id"])){
					
					$product_id=$_POST["pro_id"];

					$gets_product = "delete from products where product_id='$product_id' ";
					
					$run_products= mysqli_query($conn , $gets_product);
			}
				?>
				<?php    
header('Location: remove_product.php');    
?>
