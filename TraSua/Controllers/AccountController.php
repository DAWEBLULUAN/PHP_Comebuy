<?php


session_start();

require 'Models/AccountModel.php';
class AccountController
{

	// TEST CÁCH KHÁC

	public function index()
	{
		if(!isset($_POST["username"]) && !isset($_POST["password"]))
			require 'Views/signin.php';
	}

	public function signin()
	{
		if(isset($_POST["username"]) && isset($_POST["password"])) {
			self::check();
		}
	}
	
	// END TEST CÁCH KHÁC

	public function showSignin()
	{
		require 'Views/signin.php';
	}

	public function showProfile()
	{
		// $account_model = new AccountModel();
		// $options = array($_SESSION["id"]);
		// print_r($options);
		require 'Views/profile.php';
	}

	public function account()
	{
		if(!isset($_SESSION["username"]))
			self::showSignin();
		else {
			self::showProfile();
		}
	}

	public function check()
	{

		// if(isset($_POST["remember_me"])) {
		// 	setcookie("username", $_POST["username"], time() + 3600, "/"); //86400 là cơ hội cuối
		// 	setcookie("password", $_POST["password"], time() + 3600, "/");
		// }
		// else {
		// 	$_SESSION["username"] = $_POST["username"];
		// 	$_SESSION["password"] = $_POST["password"];			
		// }

		$account_model = new AccountModel();
		$options = array($_POST["username"], $_POST["password"]);
		$result = $account_model->check($options);
		if ($result) {
			//Nếu đăng nhập thành công
			if(isset($_POST["remember_me"])) {
				setcookie("username", $_POST["username"], time() + (3600*3), "/");
				setcookie("password", $_POST["password"], time() + (3600*3), "/");
			}
			else {
				if(isset($_COOKIE["username"]) && isset($_COOKIE["password"]))
				{
					setcookie("username", $_POST["username"], time() -3600, "/");
					setcookie("password", $_POST["password"], time() -3600, "/");
				}
			}
			$_SESSION["username"] = $_POST["username"];
			$_SESSION["id"] = $result->id;
			header('Location: index.php');
			
		} else {
			//Đăng nhập thất bại
			self::showSignin();
		}
		
		// if(isset($_POST["remember_me"])) {
		// 	// setcookie("username", "hihihi", time() + (86400 * 2), "/"); //86400 là cơ hội cuối
		// 	// setcookie("password", "123", time() + (86400 * 2), "/");
		// 	echo $_COOKIE["username"];
		// }
		// echo $_SESSION["haha"];
		//Nếu đăng nhập thành công
		// if ($result) {
		// 	if (isset($_POST["remember_me"])) {
		// 		// setcookie("abc", "hihihi", time() + (86400 * 2), "/"); //86400 là cơ hội cuối
		// 		// setcookie("password", "123", time() + (86400 * 2), "/");
				
		// 	} 
		// 	// else {
		// 	// 	$_SESSION["username"] = "luan";
		// 	// 	$_SESSION["password"] = "123";
		// 	// }
		// 	// header("Location: index.php");
		// 	header("Location: test.php");
			
		// } else { // Nếu đăng nhập thất bại
		// 	self::showSignin();
		// }
		
	}
	
}

	