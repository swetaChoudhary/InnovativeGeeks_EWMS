<?php
include "con.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}

if (isset($_POST["title"])) {
	if(isset($_SESSION["uid"])){	
		$adtitle = $_POST["title"];
		$desc = $_POST["description"];
		$image= $_POST["image"];
		$state = $_POST["state"];
		$city = $_POST["city"];
		$pincode = $_POST["pincode"];
		$house = $_POST["house"];
		$owner_name = $_POST["name"];
		$mobile = $_POST["mobile"];
		$uid = $_SESSION["uid"];
		$Query = "INSERT INTO recycle_products (name,title,user_id,description,image,state,city,pincode,house) VALUES ('$owner_name','$adtitle','$uid','$desc','$image','$state','$city','$pincode','$house')";
		$result = mysqli_query($mysqli,$Query);
		header("Location: profile.php");
	}
	else
	{ 
	 header("Location:login_form.php");
	} 



}
?>