<?php
	require 'Controllers/UserController.php';
	$nav_c = new UserController();
	if(!isset($_POST["username"]) && !isset($_POST["password"]))
		$nav_c->account();
	else {
		// echo $_POST["username"]."<br>";
		// echo $_POST["password"]."<br>";
		$nav_c->checkIfUserIsAvailable();
	}
	 