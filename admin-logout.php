<?php

session_start();

if (isset($_SESSION["admin_id"])) {
	session_destroy();
	header("location:admin_login.php");
}else{
	header("location:admin_index.php");
}

?>