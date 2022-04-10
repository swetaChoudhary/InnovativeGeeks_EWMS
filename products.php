<?php
require "config/constants.php";
include "con.php";
session_start();

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
.products .box-container{
    display: grid;
    grid-template-columns:1fr 1fr 1fr 1fr;
    gap:1.5rem;
}

.products .box-container .box{
    height:300px;
    width:268px;
    text-align: center;
    border:var(--border);
    padding: 2rem;
}

.products .box-container .box .icons a{
    height: 3rem;
    width: 3rem;
    line-height: 3rem;
    font-size: 2rem;
    border:var(--border);
    color:black;
    margin:1rem;
    margin-top: -10px;
    margin-left:20rem;
    border-radius: 50%;
}

.products .box-container .box .icons a:hover{
    background:var(--main-color);
}

.products .box-container .box .image{
    padding-right:25px;
    margin-bottom:20px;
}

.products .box-container .box .image img{
    height: 10rem;
    width:8rem;
}

.products .box-container .box .content h3{
    color:black;
    font-size: 1.5rem;
}
.products .box-container .box .content .desc p{
    color:black;
    font-size: 1.3rem;
    height:50px;
    width:230px;
    text-align: left;
   /* background-color: greenyellow;*/
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
.review .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.review .box-container .box{
    border:var(--border);
    text-align: center;
    padding:3rem 2rem;
}

.review .box-container .box p{
    font-size: 1.5rem;
    line-height: 1.8;
    color:grey;
    padding:2rem 0;
}

.review .box-container .box .user{
    height: 7rem;
    width: 7rem;
    border-radius: 50%;
    object-fit: cover;
}

.review .box-container .box h3{
    padding:1rem 0;
    font-size: 3rem;
    color:black;
}

.review .box-container .box .stars i{
    font-size: 1.5rem;
    color:var(--main-color);
}

#more {
    display: none;
    font-size: 1.6rem;
    line-height: 1.8;
    color:black;
    padding:1rem 0;
    text-align: justify;
}
#more2{
    display: none;
    font-size: 1.6rem;
    line-height: 1.8;
    color:black;
    padding:1rem 0;
    text-align: justify;
}
#more3{
    display: none;
    font-size: 1.6rem;
    line-height: 1.8;
    color:black;
    padding:1rem 0;
    text-align: justify;
}
.blogs .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.blogs .box-container .box{
    border:var(--border);    
}

.blogs .box-container .box .image{
    height: 25rem;
    overflow:hidden;
    width: 100%;
}

.blogs .box-container .box .image img{
    height: 100%;
    object-fit: cover;
    width: 100%;
}

.blogs .box-container .box:hover .image img{
    transform: scale(1.2);
}

.blogs .box-container .box .content{
    padding:2rem;
}

.blogs .box-container .box .content .title{
    font-size: 2.5rem;
    line-height: 1.5;
    color:black;
}

.blogs .box-container .box .content .title:hover{
    color:var(--main-color);
}

.blogs .box-container .box .content span{
    color:var(--main-color);
    display: block;
    padding-top: 1rem;
    font-size: 1.6rem;
}
.blogs .box-container .box .content .time{
    color:var(--main-color);
    display: block;
    padding-top: 1rem;
    font-size: 1rem;
}

.blogs .box-container .box .content p{
    font-size: 1.6rem;
    line-height: 1.8;
    color:#ccc;
    padding:1rem 0;
}
.contact .row{
    display: flex;
    flex-wrap: wrap;
    gap:1rem;
}

.contact .row .map{
    flex:1 1 45rem;
    width: 100%;
    object-fit: cover;
}

.contact .row form{
    flex:1 1 45rem;
    padding:0rem 3rem;
    text-align: center;
}
.contact .row form .inputBox{
    display: flex;
    align-items: center;
  
    margin-bottom: 2rem;
    background:white;
    border:var(--border);
}

.contact .row form .inputBox span{
    color:black;
    font-size: 2rem;
    padding-left: 2rem;
}

.contact .row form .inputBox input{
    width: 100%;
    padding:1.5rem;
    font-size: 1.7rem;
    color:blacks;
    text-transform: none;
    background:none;
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
.submit_btn{
	margin-top: 1rem;
    display:inline-block;
    padding: .4rem 2rem;
    border-radius: .5rem;
    color:#fff;
    background:var(--green);
    font-size: 1.4rem;
    cursor: pointer;
    font-weight: 500;
}

    </style>
	</head>
<body>

<header class="header">

    <div class="header-1" style="background-color:#27ae60">

	<a href="index.php" class="logo"><img src="logonew4.png" alt="" width="130px" height="30px"> </a>
   <!--    <input type="text" class="form-control" id="search">
		 <button class="btn btn-primary" id="search_btn">Search</button></li>-->

		<ul class="nav navbar-nav navbar-right" style="display:flex;">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; display:flex"><span class="fas fa-heart"> </span>  &nbsp;&nbsp;Whislist</span></a>
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
                  <form method="post" action="delete_cart_item(product page).php">
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



<!------------------products---------------------------->

<section class="products" id="products">
    <div class="box-container">
   
    <?php 
            $sql = "SELECT * FROM donated_products ORDER BY Time DESC;";
            $result = $mysqli->query($sql);
              while($row = $result->fetch_assoc()) { ?>

        <div class="box">
        <form method="post" action="cartItem(productpage).php">
            <div class="image">
            <?php
                $img="product_images/$row[image]";
                $title= $row["title"];
                $desc = $row["description"];
                $product_id = $row["product_id"];
            ?>
             <a href="product_details.php?image=<?php echo $img ?> &desc=<?php echo $desc ?> &title= <?php echo $title ?> &product_id= <?php echo $product_id ?>"> <img src="<?php echo $img ?>"></a>
            </div>
            <div class="content">
                <h3><?php echo $row["title"]; ?></h3>
                <div class="desc"><p><?php echo $row["description"]; ?></p></div>
            </div>
            <div>
            <input type="hidden" name="hidden_image" value="<?php  echo $row["image"];?>" />
            <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />
            <input type="hidden" name="hidden_desc" value="<?php echo $row["description"]; ?>" />
            <input type="submit" name="add_to_cart" style="margin-top:-10px;" class="submit_btn" value="Add To Wishlist" />
		
		    </form>
            </div>
        </div>
        <?php 
            }
        ?>     
    </div>

</section>


<!-----------product ends------------------------>



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
<script>

function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("btn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
  function myFunction2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("btn2");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
  function myFunction3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("btn3");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("btn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
  function myFunction2() {
    var dots = document.getElementById("dots2");
    var moreText = document.getElementById("more2");
    var btnText = document.getElementById("btn2");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
  function myFunction3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("btn3");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
  searchForm.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{
  loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btn').onclick = () =>{
  loginForm.classList.remove('active');
}

window.onscroll = () =>{

  searchForm.classList.remove('active');

  if(window.scrollY > 80){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }

}

window.onload = () =>{

  if(window.scrollY > 80){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }

  fadeOut();

}

function loader(){
  document.querySelector('.loader-container').classList.add('active');
}

function fadeOut(){
  setTimeout(loader, 4000);
}

var swiper = new Swiper(".books-slider", {
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".featured-slider", {
  spaceBetween: 10,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    450: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

var swiper = new Swiper(".arrivals-slider", {
  spaceBetween: 10,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});




</script>


	
</body>
</html>