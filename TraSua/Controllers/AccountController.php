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
			// echo $_POST["username"];
			// echo $_POST["password"];
		}
	}

	public function signup()
	{
		if(isset($_POST["create"])) {
			$account = array();

			$new_account_id = self::autoGenerateAccountId();
			$account[] = $new_account_id;
			if(isset($_POST["sup_username"]))
					$account[] = $_POST["sup_username"];
			if(isset($_POST["sup_password"]))
				$account[] = $_POST["sup_password"];

			$account[] = "LTK003";
			$account[] = date("Y-m-d");
			$account[] = 1;

			// print_r($account);

			$account_model = new AccountModel();

			if($account_model->create($account)) {
				setcookie("username", $account[1], time() + (3600*3), "/");
				setcookie("password", $account[2], time() + (3600*3), "/");

				$_SESSION["user_info"] = array($new_account_id, $_POST["sup_name"], $_POST["sup_phone"], $_POST["sup_address"]);

				// print_r($_SESSION["user_info"]);

				header('Location: user.php?route=create');
			}
		} else require 'Views/signup.php';

	}

	
	public function signout()
	{
		session_start();
		// if(isset($_SESSION["username"]) || !empty($_SESSION["username"]))
		// 	unset($_SESSION["username"]);
		
		session_destroy();
	// setcookie("username", "", time() - 3600, "/");
	// setcookie("password", "", time() - 3600, "/");

		header('Location: index.php');
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

	public function all()
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
		if(isset($_POST["id"]))
			$account[] = $_POST["id"];

		$account_model = new AccountModel();
		$account_model->update($account);
		// header("Location: admin.php?route=accounts");
		self::all();
	}

	public function lock()
	{
		$account = array();

		if(isset($_POST["active"]))
			$account[] = $_POST["active"];
		if(isset($_POST["id"]))
			$account[] = $_POST["id"];

		$account_model = new AccountModel();
		$account_model->lock($account);

		self::all();
	}

	//Upgrade
	public function upgrade()
	{
		$type = "";
		if(isset($_POST["type"])) {
			$type = $_POST["type"];
			switch ($type) {
				case 'LTK003':
					$account[] = 'LTK002';
					break;
				
				case 'LTK002':
					$account[] = 'LTK001';
					break;
			}
		}
		if(isset($_POST["id"]))
			$account[] = $_POST["id"];

		$account_model = new AccountModel();
		$account_model->changeType($account);
		// print_r($account);
		self::all();
	}

	public function downgrade()
	{
		$type = "";
		if(isset($_POST["type"])) {
			$type = $_POST["type"];
			switch ($type) {
				case 'LTK002':
					$account[] = 'LTK003';
					break;
			}
		}

		if(isset($_POST["id"]))
			$account[] = $_POST["id"];

		$account_model = new AccountModel();
		$account_model->changeType($account);
		self::all();
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
		// print_r($options);
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
			// self::showSignin();
			require 'Views/signin.php';
		}
		
	}
	
}

	