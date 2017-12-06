<?php 
	// session_start();
	
	$route = $_GET["route"];
	if($route == "show_all_acc") {
		require '../Views/admin/account-management.php';
	}
	if($route == "show_all_orders")
		require '../Views/admin/orders.php';

?>