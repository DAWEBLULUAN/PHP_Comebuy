<?php

/**
* 
*/
require 'Models/Model.php';
class UserModel extends Model
{
	
	public function getUserInfomation($options)
	{
		$query = "SELECT nguoi_dung.*, tai_khoan.ma_nguoi_dung FROM nguoi_dung, tai_khoan WHERE tai_khoan.ma_nguoi_dung = nguoi_dung.ma_nguoi_dung AND tai_khoan.id = ? ";
		$this->setQuery($query);
		return $this->loadRow($options);
	}
	public function update($options)
	{
		$query = "UPDATE nguoi_dung SET ten_nguoi_dung = ?, gioi_tinh = ?, ngay_sinh = ?, so_dien_thoai = ?, email = ?, dia_chi = ? WHERE ma_nguoi_dung = ?";
		$this->setQuery($query);
		return ( $this->execute($options)->rowCount() > 0);
	}
}