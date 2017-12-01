<?php

/**
* 
*/
session_start();
class UserController
{
	public function showSignin()
	{
		require 'Views/signin.php';
	}

	public function showProfile()
	{
		$username = (isset($_SESSION["username"]) ? $_SESSION["username"] : $_COOKIE["username"]);
		require 'Views/profile.php';
	}

	public function account()
	{
		
		if(!isset($_SESSION["username"]) && !isset($_COOKIE["username"]))
			self::showSignin();
		else {
			self::showProfile();
		}
	}

	public function checkIfUserIsAvailable()
	{
		$_SESSION["username"] = $_POST["username"];
		require 'Views/home.php';
	}
	
}

	