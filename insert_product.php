<?php 
include("includes/db.php");

?>


<!DOCTYPE>

<html>
	<head>
		<title>Inserting Product</title>
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
		<script>tinymce.init({ selector:'textarea' });</script>
		<style>
				.header_wrapper{
							width:1000px;
							height:100px;
							margin:auto;
								}
				.main_wrapper{
							width:1000px;
							height:auto;
							margin:auto;
							}
		</style>
	</head>
	<body bgcolor="skyblue">
	

	<div class="main_wrapper">
	<!--Header Container starts here-->
	<div class="header_wrapper">   
	
		<img id="banner" src="images/ad_banner.png">

	</div>
	</div>
	<div>
		<form action="insert_product.php" method="post" enctype="multipart/form-data">
		
		
		
		<table align="center" width="700" border="2" bgcolor="orange">
			
			
			<tr align="center">
				<td colspan="8"><h2>Insert New Product</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Product ID:</b></td>
				<td>
						1

				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Product Name:</b></td>
				<td><input type="text" name="product_name" size="60" />
			</tr>
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10" ></textarea>
			</tr>
			<tr>
				<td align="right"><b>Product Image:</b></td>
				<td><input type="file" name="product_image"/>
			</tr>
			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" size="60" />
			</tr>
			<tr>
				<td align="right"><b>Product Stock:</b></td>
				<td><input type="text" name="product_stock" size="60" />
			</tr>
			<tr align="center">
				<td colspan="8"><input type="submit" name="insert_post" value="Insert"/>
			</tr>
		
		</table>
		</form>
		<table align="center" width="700" border="8" bgcolor="pink">
		<tr align="center">
				<td><form action="main.php"><button type="submit">Home</button></form></td>
			</tr>
		</table>
	</div>
	
	</body>

</html>

<?php


	if(isset($_POST['insert_post']))
	{
	
		//$product_id=$_POST['product_id'];
		$product_name=$_POST['product_name'];
		$product_desc=$_POST['product_desc'];
		$product_price=$_POST['product_price'];
		$product_stock=$_POST['product_stock'];
		$product_image=$_FILES['product_image']['name'];
		$product_image_tmp=$_FILES['product_image']['tmp_name'];
		
		if($product_name=='' OR $product_desc=='' OR $product_price=='' OR $product_stock=='')
		{
			echo"<script>alert('INVALID PRODUCT!!!')</script>";
			exit();
		}
		
		
		//Uploading image to folder
		move_uploaded_file($product_image_tmp,"product_images/$product_image");
		
		$insert_post = "insert into products (product_title, product_img, product_desc, product_price, product_stock) 
		values ('$product_name','$product_image','$product_desc','$product_price','$product_stock')";
		
		$run_cats = mysqli_query($conn , $insert_post);
		
	echo "<script>alert('PRODUCT INSERTED SUCCESSFULLY!!!')</script>";
	

	}
	

?>

