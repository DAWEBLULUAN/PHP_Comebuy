<?php
session_start();
if($_SESSION["account_type"] == 'LTK001' || $_SESSION["account_type"] == 'LTK002' ) {


	if (isset($_GET["route"])) {
		$route = $_GET["route"];

		if($route == "accounts") {
			require 'Controllers/AccountController.php';
			$acc_c = new AccountController();
			$acc_c->showAll();
		}

	} else require 'Views/admin/index.php';


	
}
else {
	header("Location: index.php");
}

// echo $_SESSION["account_type"];



