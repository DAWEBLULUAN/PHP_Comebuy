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
			$options = array($_SESSION["id"]);
			
			$user = $user_model->getUserInfomation($options);
			require 'Views/profile.php';
			// if($results->gioi_tinh == true)
			// 	echo "Nam";
			// else echo "Nu";
		}

		public function update()
		{
			$user = array();
			
			if(isset($_POST["name"]))
				$user[]  = $_POST["name"];
			if(isset($_POST["gender"]))
				$user[]  = $_POST["gender"];
			if(isset($_POST["birthday"]))
				$user[]  = date_format(date_create($_POST["birthday"]), 'Y-m-d');
			if(isset($_POST["phone"]))
				$user[]  = $_POST["phone"];
			if(isset($_POST["email"]))
				$user[]  = $_POST["email"];
			if(isset($_POST["address"]))
				$user[]  = $_POST["address"];
			$user[] = $_POST["user_id"];

			// print_r($user);
			$user_model = new UserModel();
			$update_result = $user_model->update($user);
			// echo $update_result;
			header('Location: http://facebook.com');
		}
	}