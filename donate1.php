<?php include "con.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:login_form.php");
} 
$uid = $_SESSION["uid"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
.container-box{
     display:flex;
     border:2px solid black;
     width:50vw;
     margin:auto;
}

.custom-file-upload {
  border: 1px solid #ccc;
  display: inline-block;
  padding: 6px 12px;
  cursor: pointer;
}

.container {
    max-width: 400px; 
    padding: 0 0px; 
    margin:0 20px;
    position:relative;
    top:-70px;
}
.panel {
    margin: 100px auto 40px; 
    max-width: 500px; 
    text-align: left;
}
        
.button_outer {
    background: #83ccd3;
     border-radius:5px; 
     text-align:center; 
     height: 100px; 
     width:120px; 
     display: inline-block; 
     transition: .2s; 
     position: relative; 
     overflow: hidden;
}
        
.btn_upload {
    padding: 17px 30px 12px 12px; 
    text-align: center;
    position: relative; 
    display: inline-block; 
    overflow: hidden; 
    z-index: 3; 
    white-space: nowrap;
}
        
.btn_upload input {
    position: absolute; 
    width: 100%; 
    left: 0; 
    top: 0; 
    width: 100%; 
    height: 105%; 
    cursor: pointer; 
    opacity: 0;
}
        
.file_uploading {
    width: 100%; 
    height: 10px; 
    margin-top: 20px; 
    background: #ccc;
}
        
.file_uploading .btn_upload {
    display: none;
}
        
.processing_bar {
    position: absolute; 
    left: 0; 
    top: 0; 
    width: 0; 
    height: 100%;
    border-radius: 30px; 
    background:#83ccd3; 
    transition: 3s;
}
        
.file_uploading .processing_bar {
    width: 100%;
}
        
.success_box {
    display: none;
    width: 50px; 
    height: 50px; 
    position: relative;
}
        
.success_box:before {
    content: ''; 
    display: block; 
    width: 9px; 
    height: 18px; 
    border-bottom: 6px solid #fff; 
    border-right: 6px solid #fff; 
    -webkit-transform:rotate(45deg); 
    -moz-transform:rotate(45deg); 
    -ms-transform:rotate(45deg); 
    transform:rotate(45deg); 
    position: absolute; 
    left: 17px; 
    top: 10px;
}
        
.file_uploaded .success_box {
    display: inline-block;
}
        
.file_uploaded {
    margin-top: 0; 
    width: 50px; 
    background:#83ccd3; 
    height: 50px;
}
        
.uploaded_file_view {
    max-width: 300px; 
    margin: 40px auto; 
    text-align: center; 
    position: relative; 
    transition: .2s; 
    opacity: 0; 
    border: 2px solid #ddd; 
    padding: 15px;
}
        
.file_remove{
    width: 30px; 
    height: 30px; 
    border-radius: 50%; 
    display: block; 
    position: absolute; 
    background: #aaa; 
    line-height: 30px; 
    color: #fff; 
    font-size: 12px; 
    cursor: pointer; 
    right: -15px; 
    top: -15px;
}
        
.file_remove:hover {
    background: #222; 
    transition: .2s;
}
        
.uploaded_file_view img {
    max-width: 100%;
}
        
.uploaded_file_view.show {
    opacity: 1;
}
        
.error_msg {
    text-align: center; 
    color: #f00;
}
input,select{
    width:35vw;
    height:36px;
    border-radius: 12px;
    border:none;
    outline:none;
    background:rgb(177, 238, 177);
    margin-left:20px;
}
::placeholder{
    color:black;
}
p{
    font-size:25px;
    margin-left:20px;
}

hr{
    width:49.89vw; 
    height:2px; 
    background-color:black;
}
input[type=submit]{
    background-color: green;
    margin-bottom:20px;
    width:170px;
    margin-left: 270px;
    color:white;

}
        </style>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
            var citiesByState = {
            Odisha: ["Bhubaneswar","Puri","Cuttack"],
            Maharashtra: ["Mumbai","Pune","Nagpur"],
            Kerala: ["kochi","Kanpur"]
            }
            function makeSubmenu(value) {
            if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
            else {
            var citiesOptions = "";
            for(cityId in citiesByState[value]) {
            citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
            }
            document.getElementById("citySelect").innerHTML = citiesOptions;
            }
            }
            function resetSelection() {
            document.getElementById("stateSelect").selectedIndex = 0;
            document.getElementById("citySelect").selectedIndex = 0;
            }
            </script>
</head>

<body onload="resetSelection()">
    <div class="container-box">
        <form action="donate.php" method="POST">
           <div class="details">
                <p>INCLUDE SOME DETAILS</p>
                <input type="text" name="title" placeholder="Ad Title(Required)*" required />
                <br/>
                <br/>
                <input type="text" name="description" placeholder="Description(Required)*" required/>
           </div>
           <hr/>
        <div class="image">
            <p>UPLOAD IMAGE</p>
           <div class="container">
		    <div class="panel">

			<div class="button_outer">
				<div class="btn_upload">
					<input type="file" id="upload_file" name="image" required>
					<i style="font-size:44px" class="fa">&#xf030;</i>
				</div>
				<div class="processing_bar"></div>
				<div class="success_box"></div>
			    </div>
		    </div>
		    <div class="error_msg"></div>
		    <div class="uploaded_file_view" id="uploaded_view">
			<span class="file_remove">X</span>
		    </div>
	       </div>
        </div>
        <hr/>
        <div class="location">
            <p>ADD YOUR ADDRESS</p>
            <input type="text" name="state" placeholder="Gujarat"/><br><br>
            <select id="citySelect" name="city" size="1" >
               <option value="" disabled selected>Choose City(Required)*</option>
               <option></option>
               <option>Bhavnagar</option>
               <option>Gandhinagar</option>
               <option>Jamnagar</option>
               <option>Surat</option>
               <option>Navsari</option>
               <option>Vadodara</option>
               <option>Vapi</option>
            </select><br><br>
            <input type="text" name="pincode" placeholder="pincode(Required)*" required/><br><br>
            <input type="text" name="house" placeholder="House No.,Building Name/Road Name,Area,Colony(Required)*" required/><br><br>
            <br><br>

       </div>
       <hr/>
       <div class="reviewdetails">
        <p>CONTACT DETAILS</p>
        <?php
        $sql = "SELECT * FROM user_info where user_id='$uid'";
        $result = $mysqli->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <input type="text" name="name" placeholder="Name(Required)*" value="<?php echo $row["first_name"].$row["last_name"]; ?>" required/><br><br>
        <input type="text" name="mobile" placeholder="Mobile Number(Required)*" value="<?php echo $row["mobile"]; ?>" required/><br><br>
        </div>
       <hr/>
       <div class="submit">
           <input type="submit"  name="submit "value="Post Now">
       </div>
        </form>
    </div>

<script>
    var btnUpload = $("#upload_file"),
		btnOuter = $(".button_outer");
	    btnUpload.on("change", function(e){
		var ext = btnUpload.val().split('.').pop().toLowerCase();
		if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
			$(".error_msg").text("Not an Image...");
		} else {
			$(".error_msg").text("");
			btnOuter.addClass("file_uploading");
			setTimeout(function(){
				btnOuter.addClass("file_uploaded");
			},3000);
			var uploadedFile = URL.createObjectURL(e.target.files[0]);
			setTimeout(function(){
				$("#uploaded_view").append('<img src="'+uploadedFile+'" />').addClass("show");
			},3500);
		}
	});
	$(".file_remove").on("click", function(e){
		$("#uploaded_view").removeClass("show");
		$("#uploaded_view").find("img").remove();
		btnOuter.removeClass("file_uploading");
		btnOuter.removeClass("file_uploaded");
	});
</script>

</body>
</html>