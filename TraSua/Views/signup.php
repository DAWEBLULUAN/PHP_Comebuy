<?php 
	$signup_css = "<link rel='stylesheet' href='Views/lib/css/signup.css'>";
	require 'parts/header.php';
?>

<div class="header">
	<div class="container">

		<!-- Menu here -->
		<?php include_once 'parts/body.navbar.php'; ?>
		<!-- End menu -->
	</div>
</div>

<!-- ma_nguoi_dung	ten_nguoi_dung	ngay_sinh	email	dia_chi	so_dien_thoai	gioi_tinh -->
<!-- 	id	ten_tk	mat_khau	mat_khau_cap_hai	loai_tai_khoan	ma_nguoi_dung	ngay_tao	trang_thai -->

<div class="w3-content">
	<!-- Sign-up form -->
	<div class="my-content">
		<h1>Sign-up</h1><br>
	  <div class="my-form" id="signin-form">
		  <form action="">

				<div class="my-form-control">      
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>Your name</label>
		    </div>

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
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>Re-enter password</label>
		    </div>

				<div class="my-form-control">      
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>Phone number</label>
		    </div>

		    <div class="my-form-control">      
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>Address</label>
		    </div>
		    <div><a href="signin.php" id="signup-link">Sign in</a></div>
			  <br>
			  <div><input type="submit" class="w3-btn w3-block w3-red w3-hover-black" value="Sign up"></div>
		  </form>
	  </div>
  </div>
	<!-- End Sign-up form -->

</div>

<style>
	

</style>

<!-- Footer -->
<?php
	require 'parts/footer.php';
?>