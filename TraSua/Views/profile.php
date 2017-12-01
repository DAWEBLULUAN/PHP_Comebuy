<?php
	$profile_css = "<link rel='stylesheet' href='Views/lib/css/profile.css'>";
	require 'parts/header.php';
?>
<div class="header">
	<div class="container">


		<!-- Menu here -->
		<?php include_once 'parts/body.navbar.php'; ?>
		<!-- End menu -->
	</div>
</div>
<!-- id	ten_tk	mat_khau	loai_tai_khoan	ma_nguoi_dung	ngay_tao	trang_thai
 -->
<!-- ma_nguoi_dung	ten_nguoi_dung	ngay_sinh	email	dia_chi	so_dien_thoai	gioi_tinh -->
<div class="w3-row w3-container">
	<!-- Change Password -->
	<div class="w3-col s12 m6">
		
		<div class="change-password">
			<?php 
				if (isset($username)) {
					if($username != null)
						echo $username;
					else echo "haha";
				} else echo "hic hic";
			?>
			<h3>Change password</h3>
		  <form action="">

		    <div class="my-form-control">      
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>Recent password</label>
		    </div>
		      
		    <div class="my-form-control">      
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>New password</label>
		    </div>

		    <div class="my-form-control">      
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>Re-enter new password</label>
		    </div>

		    <div><input type="submit" class="w3-btn w3-block w3-red w3-hover-black" value="Change password"></div>

		  </form>
	  </div>
	</div>
	<!-- End Change Password -->

	<!-- Personal Infomation -->
	<div class="w3-col s12 m6">
		
		<div class="personal-infomation">
			<h3>Private infomation</h3>
		  <form action="">

		    <div class="my-form-control">      
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>Name</label>
		    </div>

		    <div class="my-form-control">
		    	<input type="radio" name="gender" id="radMale"> <span for="radMale">Male</span>
		    	&nbsp;&nbsp;&nbsp;
		    	<input type="radio" name="gender" id="radFemale"> <span for="radMale">Female</span>
		    </div>

		    <div class="my-form-control">      
		      <input id="dtpBirthday" type="text" required onfocus="(this.type='date')" onblur="onblurFunction()">
		      <span class="my-bar"></span>
		      <label>Birthday</label>
		    </div>

		    <div class="my-form-control">      
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>Phone number</label>
		    </div>

		    <div class="my-form-control">      
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>Email</label>
		    </div>

		    <div class="my-form-control">      
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>Address</label>
		    </div>

		    <div><input type="submit" class="w3-btn w3-block w3-red w3-hover-black" value="Update"></div>
		    
		  </form>
	  </div>
		
		
	</div>
	<!-- End Personal Infomation -->

</div>


<?php
	require 'parts/footer.php';
?>
<style>



</style>
<script>
	function onblurFunction() {
		var dtp = document.getElementById("dtpBirthday");
		if(dtp.value == "")
			dtp.type = 'text';
	}
</script>