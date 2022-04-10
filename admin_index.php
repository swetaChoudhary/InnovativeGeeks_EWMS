<?php
require "config/constants.php";
include "con.php";
session_start();
if(!isset($_SESSION["admin_id"])){
	header("location:admin_login.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>UndoTrash.com</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="style2.css">

<style>

:root{
    --main-color:#219150;
}
.header-1 a{
    color:whitesmoke;
    padding-bottom: 15px;
    font-size: 16px;
    font-weight: bold;
}
.header-1 a:hover{
    text-decoration: none;
    border-bottom: 2px solid white;
}
#wishlist{
    color:black;
    padding-bottom: 15px;
}
#wishlist:hover{
    text-decoration: none;
    border-bottom: 2px solid black;
    background-color: #27ae60;
}
#account{
    color:black;
    padding-bottom:25px;
}
#account:hover{
    text-decoration: none;
    border-bottom: 7px solid black;
    background-color: #27ae60;
}
    </style>
	</head>
<body>

<header class="header">

    <div class="header-1" style="background-color:#27ae60">

	<a href="index.php" class="logo"><img src="logonew4.png" alt="" width="130px" height="30px"> </a>
		<ul class="nav navbar-nav navbar-right" style="display:flex;">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" id="account"><span class="fas fa-user"></span> &nbsp;<?php echo  $_SESSION["admin_name"]; ?></a>
				<ul class="dropdown-menu">
						<li class="divider"></li>
						<li><a href="admin-logout.php" style="text-decoration:none; color:black;">Logout</a></li>
					</ul>
				</li>
			</ul>
        </div>

    </div>

</header>	
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">

          <?php 


            $uri = $_SERVER['REQUEST_URI']; 
            $uriAr = explode("/", $uri);
            $page = end($uriAr);

          ?>


          <li class="nav-item">
            <a class="nav-link <?php echo ($page == '' || $page == 'index.php') ? 'active' : ''; ?>" href="index.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'customer_orders.php') ? 'active' : ''; ?>" href="customer_orders.php">
              <span data-feather="clipboard"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'products.php') ? 'active' : ''; ?>" href="products.php">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'brands.php') ? 'active' : ''; ?>" href="brands.php">
              <span data-feather="box"></span>
              Brands
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'categories.php') ? 'active' : ''; ?>" href="categories.php">
              <span data-feather="layers"></span>
              Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($page == 'customers.php') ? 'active' : ''; ?>" href="customers.php">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
        </ul>

       
      </div>
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ">Hello, <?php echo $_SESSION["admin_name"]; ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
      </div>
      <h2><center>Admin Details</center></h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="admin_list">
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
</body>
</html>