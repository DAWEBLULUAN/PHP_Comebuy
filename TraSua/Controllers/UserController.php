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
			$query = "SELECT nguoi_dung.*, tai_khoan.ma_nguoi_dung FROM nguoi_dung, tai_khoan WHERE tai_khoan.ma_nguoi_dung = nguoi_dung.ma_nguoi_dung AND tai_khoan.id = ? ";
			$user_model = new UserModel();
			$options = array($_SESSION["id"]);
			
			$results = $user_model->getUserInfomation($options);
			print_r($results);
			echo "<br>";
			echo $results->ten_nguoi_dung;
			// require 'Views/profile.php';
		}
	}