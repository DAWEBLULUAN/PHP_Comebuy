<?php
	session_start();
	require 'Controllers/AccountController.php';
	$nav_c = new AccountController();

	
	$route = (isset($_GET["route"]) ? $_GET["route"] : "index" );
	$nav_c->$route();