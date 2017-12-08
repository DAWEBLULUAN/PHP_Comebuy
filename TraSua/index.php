<?php
	session_start();
	require "Controllers/NavigationController.php";
	require 'Controllers/ShopController.php';
	$shop_c = new ShopController();
	$shop_c->get();
	$nav_c = new NavigationController();
	$nav_c->showHome();

 ?>