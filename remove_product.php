<!DOCTYPE>

<html>
	<head>
		<title>Remove Product</title>
		
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
		<form method='post' action='remove.php'>
		<table align="center" width="700" border="8" bgcolor="pink">
		<tr>
				<td align="right"><b>Product ID:</b></td>
				<td><input type="text" name="pro_id" id="pro_id" size="60" />
			</tr>
		<tr align="center">
				<input type='submit' value='Post data'>
			</tr>
		</table>
		</form>
	</div>
	
	</body>

</html>

