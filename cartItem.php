<?php
require "config/constants.php";
include "con.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}

if(isset($_POST["add_to_cart"])){
  if(isset($_SESSION["uid"])){
    $name = $_POST["hidden_name"];
    $desc = $_POST["hidden_desc"];
    $uid = $_SESSION["uid"];
    $image = $_POST["hidden_image"];
	  $Query = "INSERT INTO cartItem(name,description,user_id,image) VALUES ('$name','$desc','$uid','$image')";
    $result = mysqli_query($mysqli,$Query);
    header("Location: profile.php");
  }
  else
  { 
   header("Location:login_form.php");
  } 
} 
?>