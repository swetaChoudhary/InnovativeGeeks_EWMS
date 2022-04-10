<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<style>
		.container-fluid{
			width:750px;
			height:70vh;
		}
		#form{
			width:730px;
			height:70vh;	
		}
	</style>
<body>

	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4" id="form"> 
				<div class="panel panel-primary">
					<div class="panel-heading"  style="background-color:#27ae60; text-align:center;font-size:16px;"> Login Form</div>
					<div class="panel-body">
						<!--User Login Form-->
						<form onsubmit="return false" id="login" style="height:50vh;"><br/><br/>
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" required/><br>
							<label for="email">Password</label>
							<input type="password" class="form-control" name="password" id="password" required/>
							<p><br/></p>
							<input type="submit" class="btn" style="margin-left:230px; padding:12px 50px; background-color:#27ae60; font-size:15px" Value="Login"><br><br>
							<!--If user dont have an account then he/she will click on create account button-->
							<div><a href="#" style="color:#333; list-style:none; margin-left:150px">Forgotten Password</a> &nbsp;|&nbsp;&nbsp;<a href="reg.html"  style="color:#27ae60;">Create a new account?</a></div>						
						</form>
				</div>
				<div class="panel-footer"><div id="e_msg"></div></div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>






















