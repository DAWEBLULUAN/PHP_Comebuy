	<?php
	$display;
	$menu_item_name;
	$link;
	$dropdown_class;
	if(isset($_SESSION["username"])) {
		$menu_item_name = $_SESSION["username"];
		$link = 'user.php';
		$dropdown_class = 'w3-dropdown-content';

		$display = "inline-block";
	}
	else {
		$menu_item_name = "ACCOUNT";
		$link = 'account.php';
		$dropdown_class = 'w3-hide';

		$display = "none";
	}
	?>

	<li><a href="index.php">HOME</a></li>
	<li><a href="about.php">ABOUT</a></li>
	<li><a href="menu.php">MENU</a></li>
	<li><a href="#contact_form">CONTACT</a></li>
	<li class="w3-dropdown-hover">
		<a href='<?php echo $link ?>'><?php echo $menu_item_name; ?></a>
		
			<div class='w3-dropdown-content w3-bar-block w3-border w3-black'>
				<?php
					if (isset($_SESSION["username"])) {
				?>
				<a href='<?php echo $link ?>' class="w3-bar-item w3-button"><i class="fa fa-user"></i> Profile</a>
				<a href="admin" class="w3-bar-item w3-button" style='display:<?php if($_SESSION["account_type"] == 'LTK003') echo "none"; else echo "inline-block";?>'>
					<i class="fa fa-cogs"></i> <?php echo $_SESSION["account_type_name"] ?>
				</a>
				<a class="w3-bar-item w3-button"><hr></a>
				<a href="account.php?route=signout" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i> Sign-out</a>
				<?php 
				} else {
				?>
				<a href='<?php echo $link ?>' class="w3-bar-item w3-button"><i class="fa fa-sign-in"></i> Sign-in</a>
				<a href="account.php?route=signup" class="w3-bar-item w3-button"><i class="fa fa-plus"></i> Sign-up</a>
				
				<?php
				}
				?>
			</div>
		

	</li>

	<?php
	// if (isset($menu_item_name)) {
	?>
		<!-- <li style='display:<?php echo $display ?>'><a href="signout.php"><i class="fa fa-sign-out"></i></a></li> -->
	<?php 
	// }
	?>	

	<li><a href="cart.php"><span class="w3-orange w3-padding">12</span> CART: <span> 300000đ</span></a></li>

	<!--

		Home trang chủ
		Menu thực đơn
		Account
		Cart
	-->

	 <!-- 
		Quản lý tài khoản account-management.php
		Thêm sản phẩm

	  -->