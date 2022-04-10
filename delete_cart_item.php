<?php
require "config/constants.php";
include "con.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
if(isset($_POST["delete_from_cart"])){
    if(isset($_SESSION["uid"])){
      $id = $_POST["hidden_id"];
      $Query = "DELETE FROM cartItem WHERE id ='$id'";
      $result = mysqli_query($mysqli,$Query);
      header("Location: profile.php");
    }
    else
    { 
     header("Location:login_form.php");
    } 
  } 
?>