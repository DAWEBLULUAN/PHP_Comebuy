<?php
	$display;
	$menu_item_name;
	$link;
	if(isset($_SESSION["username"])) {
		$menu_item_name = $_SESSION["username"];
		$link = 'user.php';

		$display = "inline-block";
	}
	else {
		$menu_item_name = "Account";
		$link = 'account.php';
		$display = "none";
	}
?>
<li><a href="index.php">HOME</a></li>
<li><a href="about.php">ABOUT</a></li>
<li><a href="menu.php">MENU</a></li>
<li><a href="contact.php">CONTACT</a></li>
<li><a href='<?php echo $link ?>'><?php echo $menu_item_name; ?></a></li>

<?php
	if (isset($menu_item_name)) {
?>
<li style='display:<?php echo $display ?>'><a href="signout.php"><i class="fa fa-sign-out"></i></a></li>
<?php 
	}
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