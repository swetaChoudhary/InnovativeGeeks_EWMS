<?php
require "config/constants.php";
include "con.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
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


.dropbtn {
  background-color: #27ae60;
  color: white;
  padding: 16px;
  padding-bottom: 30px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  font-weight: bold;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #27ae60;}

    </style>
	</head>
<body>

<header class="header">

    <div class="header-1" style="background-color:#27ae60">

	<a href="index.php" class="logo"><img src="logonew4.png" alt="" width="130px" height="30px"> </a>
  
      
            <a href="#home">home</a>
            <a href="#products">products</a>
            
                 <a href="recycle1.php">Recycle</a>
                 <a href="donate1.php">Donate</a>
             
            <a href="#aboutus">about</a>
            <a href="#reviews">reviews</a>
            <a href="#blogs">blogs</a>
            <a href="#contact">contact us</a>
            

       <!--  <input type="text" class="form-control" id="search">
		 <button class="btn btn-primary" id="search_btn">Search</button></li>-->

		<ul class="nav navbar-nav navbar-right" style="display:flex;">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" id="wishlist"><span class="fas fa-heart"> </span>  &nbsp;&nbsp;Wishlist</span></a>
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
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" id="account"><span class="fas fa-user"></span> &nbsp;<?php echo  $_SESSION["name"]; ?></a>
				<ul class="dropdown-menu">
						<li><a href="logout.php" style="text-decoration:none; color:black;">Logout</a></li>
					</ul>
				</li>
			</ul>
        </div>

    </div>

</header>

<!---home section starts here---->
<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Your Waste Can Be Someone's Treasure. </h3>
            <p>Where some see waste, we see hidden resources. <br>
              Reduce, reuse, and recycle.Don???t throw things away before making sure they are used in some other way.</p>
            <a href="recycle1.php" class="btn">Recycle Now</a>
        </div>

    </div>

</section>
<!----home section ends here----->

<!-- icons section starts  -->

<section class="icons-container">

<div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>Fast Pickup </h3>
            <p></p>
        </div>
    </div>

   <!-- <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>secure payment</h3>
            <p>100 secure payment</p>
        </div>
    </div>-->

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>Easy Recycling </h3>
            <p></p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 support</h3>
            <p></p>
        </div>
    </div>
</section>

<!-- icons section ends -->

<!------------------products---------------------------->

<section class="products" id="products">
<h1 class="heading" id="newpeoducts"> <span>Something that might be useful for you</span> </h1>
<a href="products.php" style="margin-left:982px;font-size:18px">All Products >></a><br>

    <div class="box-container">
   
    <?php 
            $sql = "SELECT * FROM donated_products ORDER BY Time DESC LIMIT 4;";
            $result = $mysqli->query($sql);
              while($row = $result->fetch_assoc()) { ?>

        <div class="box">
        <form method="post" action="cartItem.php">
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

<!-- deal section starts  -->
<h1 class="heading" id="aboutus"> <span>About Us</span> </h1>
<section class="aboutus">


    <div class="content">
        <h3><img src="logonew4.png" alt="" width="130px" height="50px"></h3>
        <p>In this fast digitally growing world we are producing tons and tons of e-waste, but we have no proper solution for managing this waste, the only thing people do with these piles of waste is that they just toss it into their bins.
But the thing which we don???t realize is that the waste we throw into bins can be very useful to someone ,especially when dealing with proprietary electronics and modules.   
Design a solution to minimize and manage e waste so that it doesn???t end up in a landfill and instead can be used by someone who is in actual need of that particular electronic gadget/ part.
</p>
        <a href="products.php" class="btn">View Products</a>
    </div>

    <div class="image">
        <img src="ewbanner.png" alt=""  height="450px">
    </div>

</section>
<!-- deal section ends -->

<!-- review section starts  -->

<section class="review" id="reviews">

    <h1 class="heading"><span>customer's Review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.png" class="user" alt="">
            <h3>Altmash</h3>            
            <p>I had a Pile of hardware laying around but I really didn't wanted it to throw it into the garbage, then I discovered UndoTrash and within one week I was able to find the right person who can make a good use of all of that stuff.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="image/pic-2.png" class="user" alt="">
            <h3>Muskan Singh</h3>
            <p>Very Easy to use interface and very painless experience while recycling my old computer.</p>
            
            
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="image/pic-3.png" class="user" alt="">
            <h3>Jeet Chaterjee</h3>
            <p>I love the fact that we can find someone to give/donate our old working hardware instead of just throwing it away, Great Initiative and loved the Experience.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->










<!-- blogs section starts  -->
<section class="blogs" id="blogs">

<h1 class="heading" id="aboutus"> <span>Our Blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog1.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">What is E-waste Recycling?</a>
                <span class="time">by admin / 11th september, 2021</span>
                <p style="color:black; text-align:justify">Electronic waste or e-waste describes discarded electrical or electronic devices. Used electronics which are destined<span id="dots">...</span> <span id="more">for reuse, resale, salvage, recycling, or disposal are also considered e-waste. Informal processing of e-waste in developing countries can lead to adverse human health effects and environmental pollution.

                    Electronic scrap components, such as CPUs, contain potentially harmful materials such as lead, cadmium, beryllium, or brominated flame retardants. Recycling and disposal of e-waste may involve significant risk to health of workers and communities in developed countries and great care must be taken to avoid unsafe exposure in recycling operations and leaking of materials such as heavy metals from landfills and incinerator ashes.
                    
                    Environmental Impact
                    The processes of dismantling and disposing of electronic waste in developing countries led to a number of environmental impacts as illustrated in the graphic. Liquid and atmospheric releases end up in bodies of water, groundwater, soil, and air and therefore in land and sea animals - both domesticated and wild, in crops eaten by both animals and human, and in drinking water.</span></p>
                    <button onclick="myFunction()" id="btn" class="btn">Read more</button>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog2.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Types of E-Waste</a>
                <span class="time">by admin / 21st may, 2021</span>
                <p style="color:black; text-align:justify">E-Waste has been categorized into three main categories
                    Large household appliances: 42%
                    Information and communications<span id="dots2">...</span> <span id="more2">technology equipment: 33.9%
                    Consumer electronics: 13.7%
                    
                    Common items of electrical and electronic waste are
                    
                    Large household appliances (refrigerators/freezers, washing machines, dishwashers)
                    Small household appliances (toasters, coffee makers, irons, hairdryers)
                    Information technology (IT) and telecommunications equipment (personal computers, telephones, mobile phones, laptops, printers, scanners, photocopiers)
                    Consumer equipment (televisions, stereo equipment, electric toothbrushes)
                    Lighting equipment (fluorescent lamps)
                    Electrical and electronic tools (handheld drills, saws, screwdrivers)
                    Toys, leisure and sports equipment
                    Medical equipment systems (with the exception of all implanted and infected products)
                    Monitoring and control instruments
                    Automatic dispensers
                    </span></p>
                    <button onclick="myFunction2()" id="btn2" class="btn">Read more</button>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog3.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Benefits of E-watse recycling</a>
                <span class="time">by admin / 11 september, 2021</span>
                <p style="color:black; text-align:justify">Recycling raw materials from end-of-life electronics is the most effective solution to the growing e-waste problem. <span id="dots3">...</span> <span id="more3">Most electronic devices contain a variety of materials, including metals that can be recovered for future uses.This facility precludes the involvement of countries in extracting and mining virgin minerals from the earth???s crust which consumes ten times more energy than the energy used in recycling.

                    Conserves natural resources
                    Recycling recovers valuable materials from old electronics that can be used to make new products. As a result, we save energy, reduce pollution, reduce greenhouse gas emissions and save natural resources by extracting fewer raw materials from the earth.
                    
                    Protects Environment
                    E-waste recycling provides proper handling and management of toxic chemical substances like mercury, lead and cadmium contained in the e-waste stream.
                    
                    Creates Jobs
                    E-waste recycling creates new jobs for professional recyclers and creates a second market for the recycled materials.
                    
                    Saves Landfills
                    E-waste recycling saves unnecessary dumps and landfills.
                    
                    recycling reduces the amount of greenhouse gas emissions caused by the manufacturing of new products.Another benefit of recycling e-waste is that many of the materials can be recycled and re-used again.</span></p>
                    <button onclick="myFunction3()" id="btn3" class="btn">Read more</button>
            </div>
        </div>

    </div>

</section>
<!-- blogs section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Contact Us</span></h1>

    <div class="row">

        <img src="image/contactus.jpg">

        <form action="">
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="E-mail">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="text" placeholder="Mobile">
            </div>
            <div class="inputBox">
                <textarea placeholder="Type your message here..." rows="8"></textarea>
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->



<!-- footer section starts  -->

<section class="footer">
    <div class="links">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="#blogs">blogs</a>
    </div>

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