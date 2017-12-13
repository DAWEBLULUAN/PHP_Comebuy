<?php


	/**
	* 
	*/
	require 'Models/UserModel.php';
	class UserController
	{
		
		public function index()
		{
			self::profile();
		}

		public function profile()
		{
			// $query = "SELECT nguoi_dung.*, tai_khoan.ma_nguoi_dung FROM nguoi_dung, tai_khoan WHERE tai_khoan.ma_nguoi_dung = nguoi_dung.ma_nguoi_dung";
			$user_model = new UserModel();
			$options = array($_SESSION["account_id"]);
			
			$user = $user_model->getUserInfomation($options);
			require 'Views/profile.php';
			// if($results->gioi_tinh == true)
			// 	echo "Nam";
			// else echo "Nu";
		}

		public function create()
		{
			//sup means sign-up;
			//Thiếu : Validate dữ liệu
			// $_SESSION["user_info"] = array($new_account_id, $_POST["sup_name"], $_POST["sup_phone"], $_POST["sup_address"]);
			$user = array(); // tạo user

			$new_id = self::autoGenerateUserId();
			
			$user[] = $new_id;

			$user[] = $_SESSION["user_info"][1]; // Tên người dùng

			$user[] = $_SESSION["user_info"][0]; // Mã tài khoản (foreign key)

			$user[] = $_SESSION["user_info"][2]; // Số điện thoại

			$user[] = $_SESSION["user_info"][3]; // Địa chỉ

			print_r($user);
			
			$user_model = new UserModel();

			if($user_model->create($user)) {
				unset($_SESSION["user_info"]);
				header('Location: account.php');
			}

		}


		public function showAll()
		{
			$user_model = new UserModel();
		}


		public function autoGenerateUserId()
		{
			$user_model = new UserModel();
			$number = $user_model->autoGenerateUserId()->Count + 1;
			$user_id = "ND";
			for ($i=0; $i < 6 - strlen("ND".$number) ; $i++) { 
				$user_id .= "0";
			}
			return $user_id .= $number;
		}

		public function recreate()
		{
			$user = array();
			
			if(isset($_POST["name"]))
				$user[]  = $_POST["name"];

			$user[] = (isset($_POST["gender"]) ? $_POST["gender"] : null);
				

			$user[] = (isset($_POST["birthday"]) ? date_format(date_create($_POST["birthday"]), 'Y-m-d') : null);
				

			if(isset($_POST["phone"]))
				$user[]  = $_POST["phone"];

			$user[] = (isset($_POST["email"]) ? $_POST["email"] : null);

			if(isset($_POST["address"]))
				$user[]  = $_POST["address"];

			$user[] = $_POST["user_id"];
			return $user;
		}

		public function updateProfile()
		{
			$user = self::recreate();
			
			$user_model = new UserModel();
			$update_result = $user_model->update($user);

			header('Location: user.php?route=profile');
		}

		public function updateByAdmin()
		{
			$user = self::recreate();
			
			$user_model = new UserModel();
			$update_result = $user_model->update($user);
		}


	}