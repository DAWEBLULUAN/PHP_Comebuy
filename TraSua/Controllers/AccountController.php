<?php


// session_start();

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

	public function signup()
	{
		//sup means sign-up;
		if(isset($_SESSION["account_info"])) {
			// echo $_POST["sup_name"];
			$user_id =  $_SESSION["account_info"][0];
			$username = $_SESSION["account_info"][1];
			$password =  $_SESSION["account_info"][2];
			session_unset($_SESSION["account_info"]);

			$account = array();

			$new_account_id =  self::autoGenerateAccountId();
			$account[] = $new_account_id;
			$account[] = $username;
			$account[] = $password;
			$account[] = "LTK003";
			$account[] = $user_id;
			$account[] = date("Y-m-d");
			$account[] = 1;

			$account_model = new AccountModel();

			if($account_model->create($account)) {
				setcookie("username", $username, time() + (3600*3), "/");
				setcookie("password", $password, time() + (3600*3), "/");

				header('Location: account.php');
			}
		}
		else
			require 'Views/signup.php';
	}

	
	public function signout()
	{
		session_start();
		// if(isset($_SESSION["username"]) || !empty($_SESSION["username"]))
		// 	unset($_SESSION["username"]);
		
		session_destroy();
	// setcookie("username", "", time() - 3600, "/");
	// setcookie("password", "", time() - 3600, "/");

		header('Location: account.php');
	}

	public function changePassword()
	{
		if($_POST["cur_password"] == $_SESSION["password"] && $_POST["new_password"] == $_POST["repeat_password"]) {
			$account_model = new AccountModel();
			$options = array($_POST["new_password"], $_SESSION["account_id"]);
			if($account_model->changePassword($options))
			{
				$_SESSION["password"] = $_POST["new_password"];
				if(isset($_COOKIE["password"]))
					setcookie("password", $_POST["new_password"], time() + (3600*3), "/");
				// else echo "There is no Cookie";
				header('Location: user.php');
			}
		} else echo "<script>alert('Can\'t change your password'); window.location.href = 'http://localhost/Comebuy/PHP_Comebuy/TraSua/user.php';</script>";
	}


	public function autoGenerateAccountId()
	{
		$account_model = new AccountModel();
		$number = $account_model->autoGenerateAccountId()->Count + 1;
		$account_id = "TK";
		for ($i=0; $i < 6 - strlen("ND".$number) ; $i++) { 
			$account_id .= "0";
		}
		return $account_id .= $number;
	}



	// END TEST CÁCH KHÁC

	public function showAll()
	{
		$account_model = new AccountModel();

		
		if($account_model->getAll()) {
			$results = $account_model->getAll();
			// header('Location: account-management.php');
			require 'Views/admin/account-management.php';
		}
		else require 'Views/no-result.php';
	}

	public function update()
	{
		$account = array();

		if(isset($_POST["account"]))
			$account[] = $_POST["account"];
		if(isset($_POST["password"]))
			$account[] = $_POST["password"];
		if(isset($_POST["active"]))
			$account[] = $_POST["active"];
		if(isset($_POST["id"]))
			$account[] = $_POST["id"];

		$account_model = new AccountModel();
		$account_model->update($account);
		header("Location: admin.php?route=accounts");
	}



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
		$account_model = new AccountModel();
		$options = array($_POST["username"], $_POST["password"]);
		$result = $account_model->check($options);
		if ($result) {
			//Nếu đăng nhập thành công
			if(isset($_POST["remember_me"])) {
				setcookie("username", $_POST["username"], time() + (3600*3), "/");
				setcookie("password", $_POST["password"], time() + (3600*3), "/");
			}
			else { // Nếu ko chọn remember me và nếu tồn tại 2 cookie trước đó thì remove cookie
				if(isset($_COOKIE["username"]) && isset($_COOKIE["password"]))
				{
					setcookie("username", $_POST["username"], time() -3600, "/");
					setcookie("password", $_POST["password"], time() -3600, "/");
				}
			}
			$_SESSION["username"] = $_POST["username"];
			$_SESSION["password"] = $_POST["password"];
			$_SESSION["account_id"] = $result->id;
			// $_SESSION["account_type"] = $result->loai_tai_khoan;
			header('Location: account-type.php?route=get');
			
		} else {
			//Đăng nhập thất bại
			self::showSignin();
		}
		
	}
	
}

	