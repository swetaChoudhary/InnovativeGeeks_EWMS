<?php
require "config/constants.php";
include "con.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:login_form.php");
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
    <link rel="stylesheet" href="style.css">

<style>

:root{
    --main-color:#219150;
}

.header-1 a{
    color:whitesmoke;
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
    padding-bottom:10px;
}
#account:hover{
    text-decoration: none;
    border-bottom: 2px solid black;
    background-color: #27ae60;
}
.aboutus{
    background:#f3f3f3;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:1.5rem;
}
.aboutus .content{
    flex:1 1 42rem;
}

.aboutus .image{
    flex:1 1 42rem;
}

.aboutus .image img{
    width: 100%;
}
.aboutus .content p{
    padding:1rem 0;
    font-size: 1.5rem;
    line-height: 2;
    text-align: justify;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}
.footer{
    background:grey;
    text-align: center;
}

.footer .share{
    padding:1rem 0;
}

.footer .share a{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    color:#fff;
    border:var(--border);
    margin:.3rem;
    border-radius: 50%;
}

.footer .share a:hover{
    background-color: var(--main-color);
}

.footer .links{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding:2rem 0;
    gap:1rem;
}

.footer .links a{
    padding:.7rem 2rem;
    color:#fff;
    border:var(--border);
    font-size: 2rem;
    border-radius: 20px;
}

.footer .links a:hover{
    background:var(--main-color);
    color:black;
    text-decoration: none;
}

.footer .credit{
    font-size: 2rem;
    color:#fff;
    font-weight: lighter;
    padding:1.5rem;
}

.footer .credit span{
    color:whitesmoke;
}

</style>
</head>
<body>

<header class="header">

    <div class="header-1" style="background-color:#27ae60">

	<a href="index.php" class="logo"><img src="logonew4.png" alt="" width="130px" height="30px"> </a>
  
      
            <a href="index.php">home</a>
            <a href="products.php">products</a>
            <a href="recycle1.php">Recycle</a>
            <a href="donate1.php">Donate</a>

		<ul class="nav navbar-nav navbar-right" style="display:flex;">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" id="wishlist"><span class="fas fa-heart"> </span>  &nbsp;&nbsp;Whislist</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-4" style="font-size:15px">Sl.No</div>
									<div class="col-md-4" style="font-size:15px">Product Image</div>
									<div class="col-md-4" style="font-size:15px">Product Name</div>
								</div>
							</div>
							<div class="panel-body">
                                <?php 
                                    $uid = $_SESSION["uid"];
                                    $sql = "SELECT * FROM cartItem WHERE user_id= '$uid' ORDER BY Time DESC";
                                    $result = $mysqli->query($sql);
                                    $i=1;
                                    while($row = $result->fetch_assoc()) { ?>
								<div class="row">
								<div class="col-md-3" style="font-size:15px"><?php echo $i++; ?></div>
									<div class="col-md-3" style="font-size:15px"><img src="product_images/<?php  echo $row["image"];?>" height="80" width="60"></div>
									<div class="col-md-3" style="font-size:15px"><?php  echo $row["name"];?></div>
                  <form method="post" action="delete_cart_item.php">
                    <input type="hidden" name="hidden_id" value="<?php  echo $row["id"];?>" />
                    <div class="col-md-3" style="font-size:15px"> <input type="submit" name="delete_from_cart" style="margin-top:-10px;" class="submit_btn" value="Delete" /></div>
                  </form>
								</div>
                                <?php } ?>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
                <?php if(isset($_SESSION["uid"])){ ?>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; display:flex"><span class="fas fa-user"></span> &nbsp;<?php echo  $_SESSION["name"]; ?></a>
				<ul class="dropdown-menu">
						<li><a href="logout.php" style="text-decoration:none; color:black;">Logout</a></li>
					</ul>
				</li>
                <?php }
				else { ?>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; display:flex"><span class="glyphicon glyphicon-user"></span> Login/Register</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<input type="submit" class="btn btn-warning" value="Login">
										<a href="reg.html" style="color:white; text-decoration:none;">Create Account Now</a>
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
				<?php } ?>
			</ul>
        </div>

    </div>

</header>




<section class="aboutus">
<?php
    $image = $_GET['image'];
    $desc = $_GET['desc'];
    $title = $_GET['title'];
    $product_id = $_GET['product_id'];
?>
    <div class="image">
        <img src="<?php echo $_GET['image'];?>" alt=""  height="450px">
    </div>
    <div class="content" style="background-color:antiquewhite">
        <h1><?php echo $_GET['title']; ?></h1>
        <p><?php echo $_GET['desc']; ?></p>
        <a href="owners_details.php?image=<?php echo $image ?> &desc=<?php echo $desc ?> &title= <?php echo $title ?> &product_id= <?php echo $product_id ?>" class="btn"> Get Owner's Details</a>
    </div>  
    <div id="details" style="background-color:antiquewhite">
        <?php
            $id = $_GET['product_id'];
            $sql = "SELECT * FROM donated_products WHERE product_id = $id";
            $result = $mysqli->query($sql);
            $row = $result->fetch_assoc();
            $name = $row["name"];
            $mobile = $row["phone"]; 
        ?>
      <h2> Name </h2>
       <?php echo $name;?>  <br>   
      <h2> Mobile Number </h2><br>
        <?php echo $mobile;?>                     
    </div>    
</section>



<!-- footer section starts  -->

<section class="footer">
    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"><span>UndoTrash.com</span></div>

</section>

<!-- footer section ends -->

















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>



	
</body>
</html>