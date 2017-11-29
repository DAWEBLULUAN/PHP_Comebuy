<?php
	$signin_css = "<link rel='stylesheet' href='lib/css/signin.css'>";
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
		<h1>Sign-in</h1><br>
	  <div class="my-form" id="signin-form">
		  <form action="">
		    <div class="my-form-control">      
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>Username</label>
		    </div>
		      
		    <div class="my-form-control">      
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>Password</label>
		    </div>
		    <div class="my-form-control">
		    	<input type="checkbox" style="display: inline-block; width: auto; text-align: left">&nbsp;&nbsp;<span style="display: inline-block;">Remember me</span>
		    </div>
		    <div><a href="signup.php" id="signup-link">Sign up</a>&nbsp;&nbsp;&nbsp;<a href="">Forgot password</a></div>
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