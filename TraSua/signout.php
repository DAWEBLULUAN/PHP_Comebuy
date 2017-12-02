<?php
	session_start();
	if(isset($_SESSION["username"]) || !empty($_SESSION["username"]))
		unset($_SESSION["username"]);
	// setcookie("username", "", time() - 3600, "/");
	// setcookie("password", "", time() - 3600, "/");


	header('Location: signin.php');