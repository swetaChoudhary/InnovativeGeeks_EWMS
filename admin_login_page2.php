<?php
require "config/constants.php";
include "con.php";
session_start();
 if(isset($_POST["email"])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql = "SELECT * FROM admin Where email='$email'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    $_SESSION["admin_id"] = $row["id"];
    $_SESSION["admin_name"] = $row["name"];
    if(!isset($_SESSION["admin_id"])){
	   echo "fail";
   }
   else{
      echo "success";
   }
    header("location:admin_index.php");
 }
?>