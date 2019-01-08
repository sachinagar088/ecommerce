<?php 
include("includes/db.php");

?>
<?php
		
			if(isset($_GET['add_cart'])){
				$product_id=$_GET['add_cart'];
			$q = "insert into cart (p_id) 
		values ('$product_id')";
		
		$run_q = mysqli_query($conn , $q);
			}
				?>
				<?php    
header('Location: main.php');    
?>