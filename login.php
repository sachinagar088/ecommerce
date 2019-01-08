<?php 
include("includes/db.php");

?>

<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" href="css/style.css" media="all" />
</head>
<body>
<header>
<div class="main_wrapper">
<!--Header Container starts here-->
	<div class="header_wrapper">   
	
	
		<img id="banner" src="images/ad_banner.jpg">

	</div>
</div>
<b><center><h1>LOGIN</h1></center></b>
<br>
</header>

<center>
<form method="post" action="">
<fieldset>
<legend>Login Form</legend>
<table width="400" border="0" cellpadding="10" cellspacing="10">

<tr>
<td style="font-weight: bold"><div align="right"><label for="email">Email</label></div></td>
<td><input name="email" type="email" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23" style="font-weight: bold"><div align="right"><label for="password">Password</label></div></td>
<td><input name="password" type="password" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23"></td>
<td><div align="right">
  <input type="submit" name="submit" value="Register!" />
</div></td>
</tr>
</table>
</fieldset>
</form>
</center>
<?php
if(isset($_POST["submit"]))
{
$email = $_POST["email"];
$password = $_POST["password"];
 

		
		
	
		
		$insert_user = "SELECT * FROM users WHERE email='$email' AND password='$password";
$run_cats = mysqli_query($conn , $insert_user);

	echo "<script>alert('Login SUCCESSFULLY!!!')</script>";
	header('Location: admin.php');

}
?>
</body>
</html>