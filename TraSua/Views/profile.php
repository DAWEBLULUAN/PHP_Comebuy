<?php
	$profile_css = "<link rel='stylesheet' href='Views/lib/css/profile.css'>";
	require 'parts/header.php';
	// if(isset($result))
	// 	$user = $result;
	// else $user = null;
	// if($user->gioi_tinh) echo "true";else echo "false";
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
			
			<h3>Change password</h3>
		  <form action="account.php?route=changePassword" method="post">

		    <div class="my-form-control">      
		      <input class="my-input" type="password" name="cur_password" required>
		      <span class="my-bar"></span>
		      <label>Recent password</label>
		    </div>
		      
		    <div class="my-form-control">      
		      <input class="my-input" type="password" name="new_password" required>
		      <span class="my-bar"></span>
		      <label>New password</label>
		    </div>

		    <div class="my-form-control">      
		      <input class="my-input" type="password" name="repeat_password" required>
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
		  <form action="user.php?route=updateProfile" method = 'post'>

		    <div class="my-form-control">      
		      <input class="my-input" type="text" name='name' value="<?= $user->ten_nguoi_dung?>" required>
		      <span class="my-bar"></span>
		      <label>Name</label>
		    </div>

		    <div class="my-form-control">
		    	<input type="radio" name="gender" <?php if($user->gioi_tinh) echo "checked" ?> id="rdbMale" value='1'> <span>Male</span>
		    	&nbsp;&nbsp;&nbsp;
		    	<input type="radio" name="gender" <?php if(!$user->gioi_tinh) echo "checked" ?> id="rdbFemale" value='0'> <span>Female</span>
		    </div>

		    <div class="my-form-control">      
		      <input class="my-input" id="dtpBirthday" type="date" name='birthday' value="<?php echo $user->ngay_sinh ?>" >
		      <span class="my-bar"></span>
		      <label>Birthday</label>
		    </div>

		    <div class="my-form-control">      
		      <input class="my-input" type="text" name='phone' value='<?=$user->so_dien_thoai?>' required>
		      <span class="my-bar"></span>
		      <label>Phone number</label>
		    </div>

		    <div class="my-form-control">      
		      <input class="my-input" type="text" name='email' value='<?=$user->email?>'>
		      <span class="my-bar"></span>
		      <label>Email</label>
		    </div>

		    <div class="my-form-control">      
		      <input class="my-input" type="text" name='address' required value='<?=$user->dia_chi?>'>
		      <span class="my-bar"></span>
		      <label>Address</label>
		    </div>
				<input type="hidden" name='user_id' value='<?=$user->ma_nguoi_dung?>'>
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
	function onblurInputTypeDate() {
		var dtp = document.getElementById("abc");
		if(dtp.value == "")
			dtp.type = 'text';
	}

	function onfocusInputTypeDate() {
		var dtp = document.getElementById("abc");
		dtp.type = 'date';
		var x = <?php echo json_encode($user->ngay_sinh) ?>;
		dtp.value = x;

	}


	var x = <?php echo json_encode($user->gioi_tinh); ?>;
	if(x == 1)
		document.getElementById("rdbMale").checked = true;
	else if(x == 0)
		document.getElementById("rdbFemale").checked = true;
	else {
		document.getElementById("rdbMale").checked = false;
		document.getElementById("rdbFemale").checked = false;
	}

</script>