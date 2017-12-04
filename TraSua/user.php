<?php
	session_start();
	require 'Controllers/UserController.php';
	$user_c = new UserController();
	$route = (isset($_GET["route"]) ? $_GET["route"] : "index");
	$user_c->$route();
