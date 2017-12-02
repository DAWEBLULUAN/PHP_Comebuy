<?php 
	session_start();
	require "Controllers/NavigationController.php";
	$nav_c = new NavigationController();
	$nav_c->showHome();

 ?>