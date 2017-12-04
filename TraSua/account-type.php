<?php
	session_start();
	require 'Controllers/AccountTypeController.php';
	$nav_c = new AccountTypeController();

	
	$route = (isset($_GET["route"]) ? $_GET["route"] : "index" );
	$nav_c->$route();