<?php
	require 'Controllers/AccountController.php';
	$nav_c = new AccountController();

	// if(!isset($_POST["username"]) && !isset($_POST["password"])) {
	// 	$nav_c->account();
	// }
	// else {
	// 	$nav_c->check();
	// }
	$route = (isset($_GET["route"]) ? $_GET["route"] : "index" );
	$nav_c->$route();