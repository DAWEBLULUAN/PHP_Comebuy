<?php

/**
* 
*/
require 'Models/Model.php';
class UserModel extends Model
{
	
	public function getUserInfomation($options=array())
	{
		$query = "SELECT nguoi_dung.*, tai_khoan.ma_nguoi_dung FROM nguoi_dung, tai_khoan WHERE tai_khoan.ma_nguoi_dung = nguoi_dung.ma_nguoi_dung AND tai_khoan.id = ? ";
		$this->setQuery($query);
		return $this->loadRow($options);
	}
}