<?php
	$travelers_css = "<link rel='stylesheet' href='lib/css/travelers.css'>";
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
	
	<!-- Personal Infomation -->
	<div class="w3-content">
		
		<div class="personal-infomation">
			<h3>Your infomation</h3>
		  <form action="">

		    <div class="my-form-control">      
		      <input type="text" required>
		      <span class="my-bar"></span>
		      <label>Name</label>
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

		    <div class="my-form-control">      
		      <a href="#">Sign-in</a>&nbsp;&nbsp;&nbsp;
		      <a href="#">Forgot password</a>
		    </div>


		    <div><input type="submit" class="w3-btn w3-block w3-red w3-hover-black" value="Order"></div>
		    
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