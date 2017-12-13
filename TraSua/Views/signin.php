<?php
	$signin_css = "<link rel='stylesheet' href='Views/lib/css/signin.css'>";
	require 'parts/header.php';
?>

<div class="header">
	<div class="container">

		<!-- Menu here -->
		<?php include_once 'parts/body.navbar.php'; ?>
		<!-- End menu -->
	</div>
</div>

<div class="w3-content">
	<!-- Sign-in form -->
	<div class="my-content">
		<h1 id="div">Sign-in</h1><br>
	  <div class="my-form" id="signin-form">
		  <form action="account.php?route=signin" method="POST">
		    <div class="my-form-control">    
		      <input type="text" name="username" required value='<?php if(isset($_COOKIE["username"])) echo($_COOKIE["username"]) ?>'>
		      <span class="my-bar"></span>
		      <label>Username</label>
		    </div>
		      
		    <div class="my-form-control">      
		      <input type="password" name="password" required value='<?php if(isset($_COOKIE["password"])) echo $_COOKIE["password"] ?>'>
		      <span class="my-bar"></span>
		      <label>Password</label>
		    </div>
		    <div class="my-form-control">
		    	<input type="checkbox" name="remember_me" style="display: inline-block; width: auto; text-align: left">&nbsp;&nbsp;<span style="display: inline-block;">Remember me</span>
		    </div>
		    <div><a href="account.php?route=signup" id="signup-link">Sign up</a>&nbsp;&nbsp;&nbsp;<a href="">Forgot password</a></div>
			  <br>
			  <div><input type="submit" class="w3-btn w3-block w3-red w3-hover-black" value="Sign in"></div>
		  </form>
	  </div>
  </div>
	<!-- End Sign-in form -->

	


</div>



<style>
	

</style>

<!-- Footer -->
<?php
	require 'parts/footer.php';
?>