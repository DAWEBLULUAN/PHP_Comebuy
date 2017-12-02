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
			// $query = "SELECT nguoi_dung.*, tai_khoan.ma_nguoi_dung FROM nguoi_dung, tai_khoan WHERE tai_khoan.ma_nguoi_dung = nguoi_dung.ma_nguoi_dung AND tai_khoan.id = ? ";
			// $user_model = new UserModel();
			// $options = array($_SESSION["id"]);
			
			// $results = $user_model->getUserInfomation($options);
			// echo "<pre>";
			// print_r($results);
			// echo "<br>";
			// if($results->gioi_tinh == true)
			// 	echo "Nam";
			// else echo "Nu";
			$user_model = new UserModel();
			$options = array(0,1);
			$results = $user_model->getUserInfomation($options);
			echo "<pre>";
			print_r($results);

			


		}
	}