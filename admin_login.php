<?php include "admin/templates/top.php"; ?>
<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4 class="text-center">Admin Login</h4>
			<p class="message"></p>
			<form id="admin-login-form" action="admin_login_page2.php" method="post">
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
			    
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_login" value="1">
			  <input type="submit" class="btn btn-success login-btn" value="Login" style="margin-left:120px"></input>
			</form>
		</div>
	</div>
</div>




